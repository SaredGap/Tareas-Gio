const mosca = require('mosca')


const broker = new mosca.Server({
	port:9000
})

broker.on('ready', ()=> {
	console.log('Arduino is Ready!!')
})

broker.on('clientconnected', (client) => {
	console.log('new client: ' + client.id)
})

broker.on('published', (packet) => {
	console.log(packet.payload.toString())
})