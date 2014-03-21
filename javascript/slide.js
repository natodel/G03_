
var imageList = new Array("slide1.jpg","slide2.jpg","slide3.jpg","slide4.jpg","slide5.jpg");
function slideShow(dem){
	document.getElementById("slideShow").src = imageList[dem];
	dem+=1;
		if(dem<imageList.length){
			window.setTimeout("slideShow("+dem+")",3000);
		}
		else {
			dem=0;
			window.setTimeout("slideShow("+dem+")",3000);
		}
}
