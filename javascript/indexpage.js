function addEntry()
{

document.getElementById('addTP').style.display='none';
document.getElementById('deleteEntry').style.display='none';
document.getElementById('deleteTP').style.display='none';
document.getElementById('modifyEntry').style.display='none'; 
document.getElementById('searchEntry').style.display='none'; 

document.getElementById('listEntry').style.display='none';


	document.getElementById('addEntry').style.display='block';

var myElem = document.getElementById('searchresult');
if (myElem != null){
	document.getElementById('searchresult').style.display='none';	
}

var myElem = document.getElementById('listresult');
if (myElem != null){
	document.getElementById('listresult').style.display='none';	
}


}


function addTP()
{

document.getElementById('addEntry').style.display='none';
document.getElementById('deleteEntry').style.display='none';
document.getElementById('deleteTP').style.display='none';
document.getElementById('modifyEntry').style.display='none'; 
document.getElementById('searchEntry').style.display='none'; 
document.getElementById('listEntry').style.display='none';


	


	document.getElementById('addTP').style.display='block';    


var myElem = document.getElementById('searchresult');
if (myElem != null){
	document.getElementById('searchresult').style.display='none';	
}

var myElem = document.getElementById('listresult');
if (myElem != null){
	document.getElementById('listresult').style.display='none';	
}

}


function deleteEntry()
{

document.getElementById('addTP').style.display='none';
document.getElementById('addEntry').style.display='none';
document.getElementById('deleteTP').style.display='none';
document.getElementById('modifyEntry').style.display='none'; 
document.getElementById('searchEntry').style.display='none'; 
document.getElementById('listEntry').style.display='none';


	



    	document.getElementById('deleteEntry').style.display='block';


var myElem = document.getElementById('searchresult');
if (myElem != null){
	document.getElementById('searchresult').style.display='none';	
}

var myElem = document.getElementById('listresult');
if (myElem != null){
	document.getElementById('listresult').style.display='none';	
}

}


function deleteTP()
{

document.getElementById('addTP').style.display='none';
document.getElementById('deleteEntry').style.display='none';
document.getElementById('addEntry').style.display='none';
document.getElementById('modifyEntry').style.display='none'; 
document.getElementById('searchEntry').style.display='none'; 
document.getElementById('listEntry').style.display='none';


	




     	document.getElementById('deleteTP').style.display='block';   



var myElem = document.getElementById('searchresult');
if (myElem != null){
	document.getElementById('searchresult').style.display='none';	
}

var myElem = document.getElementById('listresult');
if (myElem != null){
	document.getElementById('listresult').style.display='none';	
}

}


function modifyEntry()
{

document.getElementById('addTP').style.display='none';
document.getElementById('deleteEntry').style.display='none';
document.getElementById('deleteTP').style.display='none';
document.getElementById('addEntry').style.display='none';
document.getElementById('searchEntry').style.display='none'; 
document.getElementById('listEntry').style.display='none';


	



      	document.getElementById('modifyEntry').style.display='block';      


var myElem = document.getElementById('searchresult');
if (myElem != null){
	document.getElementById('searchresult').style.display='none';	
}

var myElem = document.getElementById('listresult');
if (myElem != null){
	document.getElementById('listresult').style.display='none';	
}


}


function searchEntry()
{

document.getElementById('addTP').style.display='none';
document.getElementById('deleteEntry').style.display='none';
document.getElementById('deleteTP').style.display='none';
document.getElementById('modifyEntry').style.display='none'; 
document.getElementById('addEntry').style.display='none';
document.getElementById('listEntry').style.display='none';


	



       	document.getElementById('searchEntry').style.display='block';    



var myElem = document.getElementById('searchresult');
if (myElem != null){
	document.getElementById('searchresult').style.display='none';	
}

var myElem = document.getElementById('listresult');
if (myElem != null){
	document.getElementById('listresult').style.display='none';	
}

}

function listEntry()
{

document.getElementById('addTP').style.display='none';
document.getElementById('deleteEntry').style.display='none';
document.getElementById('deleteTP').style.display='none';
document.getElementById('modifyEntry').style.display='none'; 
document.getElementById('searchEntry').style.display='none'; 
document.getElementById('addEntry').style.display='none';


	




        document.getElementById('listEntry').style.display='block';       



var myElem = document.getElementById('searchresult');
if (myElem != null){
	document.getElementById('searchresult').style.display='none';	
}

var myElem = document.getElementById('listresult');
if (myElem != null){
	document.getElementById('listresult').style.display='none';	
}

}


function submitaddentry(){

	document.getElementById("addentryform").submit();
}