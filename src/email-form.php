<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>Email KAR</title>
<style type="text/css">
<!--
label {
	float: left;
	width: 140px;
	text-align: right;
	padding-right: 4px;
}
body {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: .7em;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function YY_checkform() { //v4.65
//copyright (c)1998,2002 Yaromat.com
  var args = YY_checkform.arguments; var myDot=true; var myV=''; var myErr='';var addErr=false;var myReq;
  for (var i=1; i<args.length;i=i+4){
    if (args[i+1].charAt(0)=='#'){myReq=true; args[i+1]=args[i+1].substring(1);}else{myReq=false}
    var myObj = MM_findObj(args[i].replace(/\[\d+\]/ig,""));
    myV=myObj.value;
    if (myObj.type=='text'||myObj.type=='password'||myObj.type=='hidden'){
      if (myReq&&myObj.value.length==0){addErr=true}
      if ((myV.length>0)&&(args[i+2]==1)){ //fromto
        var myMa=args[i+1].split('_');if(isNaN(parseInt(myV))||myV<myMa[0]/1||myV > myMa[1]/1){addErr=true}
      } else if ((myV.length>0)&&(args[i+2]==2)){
          var rx=new RegExp("^[\\w\.=-]+@[\\w\\.-]+\\.[a-z]{2,4}$");if(!rx.test(myV))addErr=true;
      } else if ((myV.length>0)&&(args[i+2]==3)){ // date
        var myMa=args[i+1].split("#"); var myAt=myV.match(myMa[0]);
        if(myAt){
          var myD=(myAt[myMa[1]])?myAt[myMa[1]]:1; var myM=myAt[myMa[2]]-1; var myY=myAt[myMa[3]];
          var myDate=new Date(myY,myM,myD);
          if(myDate.getFullYear()!=myY||myDate.getDate()!=myD||myDate.getMonth()!=myM){addErr=true};
        }else{addErr=true}
      } else if ((myV.length>0)&&(args[i+2]==4)){ // time
        var myMa=args[i+1].split("#"); var myAt=myV.match(myMa[0]);if(!myAt){addErr=true}
      } else if (myV.length>0&&args[i+2]==5){ // check this 2
            var myObj1 = MM_findObj(args[i+1].replace(/\[\d+\]/ig,""));
            if(myObj1.length)myObj1=myObj1[args[i+1].replace(/(.*\[)|(\].*)/ig,"")];
            if(!myObj1.checked){addErr=true}
      } else if (myV.length>0&&args[i+2]==6){ // the same
            var myObj1 = MM_findObj(args[i+1]);
            if(myV!=myObj1.value){addErr=true}
      }
    } else
    if (!myObj.type&&myObj.length>0&&myObj[0].type=='radio'){
          var myTest = args[i].match(/(.*)\[(\d+)\].*/i);
          var myObj1=(myObj.length>1)?myObj[myTest[2]]:myObj;
      if (args[i+2]==1&&myObj1&&myObj1.checked&&MM_findObj(args[i+1]).value.length/1==0){addErr=true}
      if (args[i+2]==2){
        var myDot=false;
        for(var j=0;j<myObj.length;j++){myDot=myDot||myObj[j].checked}
        if(!myDot){myErr+='* ' +args[i+3]+'\n'}
      }
    } else if (myObj.type=='checkbox'){
      if(args[i+2]==1&&myObj.checked==false){addErr=true}
      if(args[i+2]==2&&myObj.checked&&MM_findObj(args[i+1]).value.length/1==0){addErr=true}
    } else if (myObj.type=='select-one'||myObj.type=='select-multiple'){
      if(args[i+2]==1&&myObj.selectedIndex/1==0){addErr=true}
    }else if (myObj.type=='textarea'){
      if(myV.length<args[i+1]){addErr=true}
    }
    if (addErr){myErr+='* '+args[i+3]+'\n'; addErr=false}
  }
  if (myErr!=''){alert('The required information is incomplete or contains errors:\t\t\t\t\t\n\n'+myErr)}
  document.MM_returnValue = (myErr=='');
}
//-->
</script>


<script language='JavaScript' src='/scripts/incPureUpload.js' type="text/javascript"></script>

</head>

<body>
<h3>Send an email to Kingston Regatta</h3>

<form action="https://www.kingstonregatta.co.uk/email-form.php??GP_upload=true" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="YY_checkform(&#39;form1&#39;,&#39;name&#39;,&#39;#q&#39;,&#39;0&#39;,&#39;Please enter your name&#39;,&#39;email&#39;,&#39;#S&#39;,&#39;2&#39;,&#39;Please enter your email address&#39;,&#39;details&#39;,&#39;5&#39;,&#39;1&#39;,&#39;Please enter your message&#39;);checkFileUpload(this,&#39;&#39;,false,2000,&#39;&#39;,&#39;&#39;,&#39;&#39;,&#39;&#39;,&#39;&#39;,&#39;&#39;);return document.MM_returnValue">
  <p>
  <label>Subject:</label>
  <input name="subject" type="hidden" id="subject" value="KAR Regatta - Enquiry">
  <strong>Kingston Regatta - Enquiry </strong></p>
  <p>
    <label>Name:</label>
    <input name="name" type="text" id="name" size="24">
  </p>
  <p>
    <label>Email address:</label>
    <input name="email" type="text" id="email" size="24">
  </p>
  <p>
    <label>Message:</label>
    <textarea name="details" cols="24" rows="5" id="details"></textarea>
  </p>
  <p>
    <label>Attachment (optional): </label>
    <input name="filename" type="file" id="filename" onchange="checkOneFileUpload(this,&#39;&#39;,false,2000,&#39;&#39;,&#39;&#39;,&#39;&#39;,&#39;&#39;,&#39;&#39;,&#39;&#39;)">
  </p>
  <label>&nbsp;</label>
  <input type="submit" name="Submit" value="Send">
  <input name="emailid" type="hidden" id="emailid" value="">
  <input type="hidden" name="MM_insert" value="form1">
</form>
<p><a href="javascript:window.close()">Close window </a> </p>


</body></html>