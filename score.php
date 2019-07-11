
	var Quest = new Array(10);

	function initialise() {

	  for(var i=0; i<10; i++) { 
	  Quest[i]=0; 
	  }
	}

	function total() {

	  myScore=0;
	  
	  for (var i=0; i<10; i++) { 
	  myScore=myScore+Quest[i]; 
	  }
	  
	  result(myScore);
	}
	
	myContents = new Array();
	myContents[0] = "you scored 1";
	myContents[1] = "you scored 2";
	myContents[2] = "you scored 3";
	myContents[3] = "you scored 4";
	myContents[4] = "you scored 5."



	function result(myScore) {

	   if (myScore>60) { myContentsPtr = 4; }
		  else { if (myScore > 50) { myContentsPtr = 3; }
			else { if(myScore>40)  { myContentsPtr = 2; } 
			  else { if(myScore>20) { myContentsPtr = 1; }
				else  { myContentsPtr = 0; }
			   }
		     }
		   }
	display(myContentsPtr)
	}

	function display(myContents) {
		// alert("Scoreeeee = "+ document.getElementsByName("score").value)
				changeScore(myContents);
			//	print();
				var userN=localStorage.getItem("username");
				// alert(userN);
				changeName(userN);
			//	printName();
      activate();
    }
    function activate(){
        var y = document.getElementById("subm");
        y.disabled=false;
    }

	function save(q, points) {
	  q = q-1;
	  Quest[q] = points
	}	
	function changeScore(Score){
		document.getElementById('scor').value=Score;
	}
	// function print(){
	// 	alert("Score=" + document.getElementById('scor').value)
	// }
	function changeName(name){
		document.getElementById("uname").value = name;
	}
	// function printName(){
	// 	alert("your name is " + localStorage.getItem("username"));
	// }