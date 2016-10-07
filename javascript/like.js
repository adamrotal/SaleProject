function like(elmnt,event){
	event.preventDefault();
	
	var sib = elmnt.previousSibling;
	while(sib.className != "nLike"){
		sib = sib.previousSibling;
	}

	if(elmnt.innerHTML == "LIKE"){
		elmnt.className += " dislikeButton";
		elmnt.innerHTML = "DISLIKE";
		sib.innerHTML = parseInt(sib.innerHTML) + 1;
	}else{
		elmnt.className = "likeButton";
		elmnt.innerHTML = "LIKE";
		sib.innerHTML = parseInt(sib.innerHTML) - 1;
	}
	
	

}