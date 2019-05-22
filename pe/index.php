<HTML>
    <HEAD>
        <TITLE>计算</TITLE>
    </HEAD>
    <BODY>
    <?php
    if (isset($_POST["tag"])){
        $addend1=$_POST["addend1"];
        $addend2=$_POST["addend2"];
		$addend3=$_POST["addend3"];
        $method =$_POST['method'];
    }else{
        $addend1=0;
        $addend2=0;
		$addend3=0;
        $method ='+';
    }
	
   $huilv ='6.8';
 
     switch ($method){
        case '+':
			$resultT = ($addend1 + 90 + 82 ) / $huilv; /* tx */ 
			$resultS = ($addend1 + 90 + 90 ) / $huilv; /* sb */ 
			$resultZU = ($addend1 + 90 + 110 ) / $huilv; /* ZU */ 
			$resultL = ($addend1 + 50 + 100 ) / $huilv; /* ZU */ 
			
            $result = ($addend1 + 90 + 130 ) / $huilv;  /* 1 */ 
			$result2 = ($addend1 + 90 + 150 ) / $huilv;  /* 2 */ 
			$result3 = ($addend1 + 90 + 175 ) / $huilv;  /* 3 */ 
			 
			$result6 = ($addend1 + $addend2 + 180 + 150 + 93) / $huilv; /* 2.0 kg */ 
			$result7 = ($addend1 + $addend2 + 180 + 274 ) / $huilv; /* 2.5 kg */ 
			$result8 = ($addend1 + $addend2 + 180 + 305 ) / $huilv; /* 3 kg */ 
			$result9 = ($addend1 + $addend2 + 180 + 336 ) / $huilv; /* 3.5 kg */ 
			$result4 = ($addend1 + $addend2 + 180 + 150 + 31) / $huilv;  /* 1.0 kg */ 
			$result5 = ($addend1 + $addend2 + 180 + 150 + 62 ) / $huilv; /* 1.5 kg */ 
			
			$result11 = ($addend1 + $addend2 + $addend3 + 270 + 274 ) / $huilv; /* 2.5 kg */ 
			$result12 = ($addend1 + $addend2 + $addend3 + 270 + 305 ) / $huilv; /* 3.0 kg */ 
			$result13 = ($addend1 + $addend2 + $addend3 + 270 + 336  ) / $huilv; /* 3.5 kg */ 
			$result10 = ($addend1 + $addend2 + $addend3 + 270 + 150 + 93 ) / $huilv; /* 2.0 kg */ 
			$result14 = ($addend1 + $addend2 + $addend3 + 270 + 150 + 62 ) / $huilv; /* 1.5 kg */ 
			
            break;
			
			$result = $addend1 + $addend2 + $addend3;
        
    }
?>
<meta charset="utf-8">
<form name="form1" method="post" action="#">
     <input type="hidden" name="tag" size="4" value="1"><br><br>
	 
     <input type="text" name="addend1" size="4" style="width:66px;height:36px;" value="<?php echo $addend1;?>">
	 
     <select name="method">
        <option value='+'<?php if($method=='+')?>>+</option>
     </select>
	 
	 <input type="text" name="addend2" size="4" style="width:66px;height:36px;" value="<?php echo $addend2;?>">
	 
	 <select name="method">
        <option value='+'<?php if($method=='+')?>>+</option>
     </select>
	 
	 <input type="text" name="addend3" size="4" style="width:66px;height:36px;" value="<?php echo $addend3;?>">

	 <br><br><input type="submit" name="button1" value="计算">
	 
    <br><br>--------------1--------------<br><br> 
	
	TX = <?php echo $resultT;?><br>
	SB = <?php echo $resultS;?><br>
	LX = <?php echo $resultL;?><br><br>
	
    1 &nbsp; = <?php echo $result;?><br>
    2 &nbsp; = <?php echo $result2;?><br>
	3 &nbsp; = <?php echo $result3;?><br><br>
	
	ZU = <?php echo $resultZU;?><br>
	
	
	<br><br>--------------2--------------<br><br>
	
	1.5 kg = <?php echo $result5;?><br>
	2.0 kg  = <?php echo $result6;?><br>
	2.5 kg  = <?php echo $result7;?><br>
	3.0 kg  = <?php echo $result8;?><br><br>
	3.5 kg  = <?php echo $result9;?><br>
	1.0 kg = <?php echo $result4;?><br>
	
	<br><br>--------------3--------------<br><br>
	
	2.5 kg  = <?php echo $result11;?><br>
	3.0 kg  = <?php echo $result12;?><br>
	3.5 kg  = <?php echo $result13;?><br><br>
	2.0 kg  = <?php echo $result10;?><br>
	1.5 kg  = <?php echo $result14;?><br>
	
    
</form>

<a href="http://www.asneakerstore.com/size.jpg" target="_blank">Size</a><br>
    </BODY>
</HTML>
