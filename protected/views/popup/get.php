setTimeout(createModalPopup,10000);

function createModalPopup() 
{
	let dialogDiv = document.createElement("div");
	dialogDiv.id="div"
	
	let title	=	document.createElement("h1");
	title.innerHTML="<?php echo $model->attributes['name']?>";
	title.setAttribute("style","color:#fff");
	dialogDiv.appendChild(title);
	
	let content = document.createElement('p');
	content.setAttribute("style","color:#000;background-color:#fff;padding:9px");
	content.innerHTML="<?php echo $model->attributes['content']?>";
	dialogDiv.appendChild(content);
	
	let closeButton= document.createElement("div");
	let newContent = document.createTextNode("ЗАКРЫТЬ ПОПАП");
	closeButton.appendChild(newContent);
	closeButton.id="btn";
	let divLeftMargin=(document.body.clientWidth-380)/2;
	let divHeight=content.offsetHeight;
	
	dialogDiv.setAttribute("style", "border-radius:9px;box-shadow:0px 0px 11px 11px rgba(0, 0, 0, 0.2);position:absolute;border:3px solid;height: 380px; width: 380px; top: 30%; left: "+parseInt(divLeftMargin)+"px; margin: 10px;background:black; text-align: center;vertical-align: middle");
	closeButton.setAttribute("style", "border-radius:9px;cursor:grab;margin: 0px; padding:10px; clear: both; font-size:11px;background-color:green;color:#fff");
	dialogDiv.appendChild(closeButton);
	document.body.appendChild(dialogDiv).appendChild(closeButton);

	closeButton.onclick = function remove(btn)
	{
		dialogDiv.parentElement.removeChild(dialogDiv);
	}
}