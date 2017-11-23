
function click(e)
{
	chrome.tabs.executeScript(null,{code:"window.location.href ='"+options[e.target.id]+"'"});
	window.close();

}


document.addEventListener('DOMContentLoaded',function () {

	var divs=document.querySelectorAll('div');
	for(var i=0;i<divs.length;i++)
	{
       divs[i].addEventListener('click',click);
	}
});

var options={
Authenticate:'http://localhost/MMA2/MMA.html',
giveUp:'https://www.nsa.gov/'

}

