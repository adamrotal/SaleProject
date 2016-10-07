function like(elmnt,event){
	event.preventDefault();
	
	var nLike = elmnt.previousSibling;
	while(nLike.className != "nLike"){
		nLike = nLike.previousSibling;
	}


	var sib = elmnt.previousSibling;
	
	while(sib.className != "idProdukData"){
		sib = sib.previousSibling;
	}


	var idUser = parseInt(document.getElementById("idUsernameData").value);
	var idProdukData = 	parseInt(sib.innerHTML);

	
	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	    	var res = JSON.parse(this.responseText);
	    	
	    	nLike.innerHTML = res.nLiked;
	    	if(res.liked == true){
	    		elmnt.innerHTML = "DISLIKE";
	    		elmnt.className = "likeButton dislikeButton";
	    	}else{
	    		elmnt.innerHTML = "LIKE";
	    		elmnt.className = "likeButton";
	    	}
	    }
  	};
  	var url = "ajaxLike.php?idUser=" + idUser + "&idProduk=" + idProdukData;
  	xhttp.open("GET", url, true);
  	xhttp.send();
	
	

}