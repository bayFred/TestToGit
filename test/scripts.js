/*---------------------------------
*
*	Построение треугольника в цикле
*
*/
/*let x = "#";

for(let i = 0; i<7; i++){
	console.log(x);
	x+="#";
}*/
//----------------------------------

/*----------------------------------
*
*	FizzBuzz 
*
**
*/
/*	for(let i = 1; i<=100; i++){
		
		
		if(i%3==0 && i%5==0){
			console.log("Fizz" + " & " + "Buzz");
			i++;
		}
		
		if(i%3==0){
			console.log("Fizz");
			i++;
		}
		
		if(i%5==0){
			console.log("Buzz");
			i++;
			if(i==101) {break};
		}
		
		
		
		console.log(i);
		
	}
	*/
	//-----------------------------------------------------
	
	
	/*
	*
	*	Шахматная доска
	*
	*
	*/
	
	
	//Переношу на Git Hub
	
	let x = " ";
	let y = "#";
	let tr = "";
	
	for(let i = 0; i < 8; i++){
		
		//if(i%2==0){console.log(x);}
		//else  console.log(y);
	
	//if(i%2==0){tr = tr + y;}
		//else{tr = tr + x;}
		
		if(i == 7)break;
		
		 if(i%2==0){tr ="#";}
		else {tr = " ";}
		
	for(let j = 0; j < 8; j++){
		
		//tr = "#";
		//if(j%2==0){console.log(x);}
		//tr+=tr;
		//else  console.log(y);
		
		//let desk = x + y;
		if(j == 7)break;
		
		else if(tr==" "){tr = tr + y;}
		else {tr = tr + x;}
		
			 
			
			
		
		
		
	}
	console.log(tr);
	//tr="#";
	//i++;
	//console.log("\n");
	
	
			 
			
			
	
	}




