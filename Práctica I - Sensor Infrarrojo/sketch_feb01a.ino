const int infra=9;



void setup(){
  Serial.begin(9600);
  pinMode(infra, INPUT);
}

void loop(){
  int inframov = 0;
  inframov = digitalRead(infra ); 
  
  if (inframov == LOW){
    Serial.println("0");
  }
    if (inframov == HIGH){
    Serial.println("1");
  }
  delay(1000);
}
