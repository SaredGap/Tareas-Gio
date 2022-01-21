const int EchoPin = 5;
const int TrigPin = 6;

void setup(){
  Serial.begin(9600);
  pinMode(TrigPin,OUTPUT);
  pinMode(EchoPin,INPUT);
}
void loop(){
  int cm = ping(TrigPin,EchoPin);
  Serial.print("Distancia");
  Serial.print(cm);
  Serial.printIn("cm");
  delay(1000);
}

int ping(int TrigPin, int EchoPin){
  long duration,distance;
  digital write(TrigPin,LOW);
  delay Microseconds(4);
  digital write(TrigPin,HIGH);
  delay Microseconds(10);
  digital write(TrigPin,LOW);
  duration = pulseIn(EchoPin,HIGH);
  distance = duration/(29.2*2);
  return distance
}
