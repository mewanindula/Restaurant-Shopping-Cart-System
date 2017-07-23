var count=1;
var gap


function ImageCount(x)
{
	var Image=document.getElementById("slide");
	count=count+x;
	
	if(count>=11)
	{
		count=1;
	}
	if(count<=0)
	{
		count=10;
	}
	
	Image.src="../../Images/Image Slider/img"+count+".jpg";
}

function show()
{
	var Image=document.getElementById("slide");
	count=count+1;
	
	if(count>=11)
	{
		count=1;
	}
	
	Image.src="../../Images/Image Slider/img"+count+".jpg";
}

function start()
{
	gap=setInterval(show,1500);
}

function pause()
{
	clearInterval(gap);
}

function navi(x)
{
	var Image=document.getElementById("slide");
	Image.src="../../Images/Image Slider/img"+x+".jpg";
}
	