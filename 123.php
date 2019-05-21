<HTML>
    <HEAD>
        <TITLE>表单数据传递</TITLE>
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
        $method ='+';
    }
   
     switch ($method){
        case '+':
			$result0 = ($addend1 + 90 + 82 ) / 6.8;
            $result = ($addend1 + 90 + 130 ) / 6.8;
			$result2 = ($addend1 + 90 + 150 ) / 6.8;
			$result3 = ($addend1 + 90 + 175 ) / 6.8;
			$resultS = ($addend1 + 90 + 90 ) / 6.8;

			$result4 = ($addend1 + $addend2 + 180 + 150 + 31) / 6.8;
			$result5 = ($addend1 + $addend2 + 180 + 150 + 62 ) / 6.8;
			$result6 = ($addend1 + $addend2 + 180 + 150 + 93) / 6.8;
			$result7 = ($addend1 + $addend2 + 180 + 150 + 93 + 31) / 6.8;
			$result8 = ($addend1 + $addend2 + 180 + 150 + 93 + 31 + 31 ) / 6.8;
			$result9 = ($addend1 + $addend2 + 180 + 150 + 93 + 31 + 31 +31  ) / 6.8;
			
			$result10 = ($addend1 + $addend2 + $addend3 + 270 + 150 + 93 ) / 6.8;
			$result11 = ($addend1 + $addend2 + $addend3 + 270 + 150 + 93 + 31) / 6.8;
			$result12 = ($addend1 + $addend2 + $addend3 + 270 + 150 + 93 + 31 + 31 ) / 6.8;
			$result13 = ($addend1 + $addend2 + $addend3 + 270 + 150 + 93 + 31 + 31 +31  ) / 6.8;
			
			
			
            break;
			
			$result = $addend1 + $addend2 + $addend3;
        
    }
?>
<meta charset="utf-8">
<form name="form1" method="post" action="#">
     <input type="hidden" name="tag" size="4" value="1">   
<br>	 
     <input type="text" name="addend1" size="4" value="<?php echo $addend1;?>">
	 
     <select name="method">
        <option value='+'<?php if($method=='+')?>>+</option>
     </select>
	 
	 <input type="text" name="addend2" size="4" value="<?php echo $addend2;?>">
	 <select name="method">
        <option value='+'<?php if($method=='+')?>>+</option>
     </select>
	 
	 <input type="text" name="addend3" size="4" value="<?php echo $addend3;?>">
	 
	 
    <br><br>--------------1--------------<br><br>
	T = <?php echo $result0;?><br>
	S = <?php echo $resultS;?><br><br>
    1 = <?php echo $result;?><br>
    2 = <?php echo $result2;?><br>
	3 = <?php echo $result3;?><br>
	<br><br>--------------2--------------<br><br>
	1.0 kg = <?php echo $result4;?><br>
	1.5 kg = <?php echo $result5;?><br><br>
	2.0 kg  = <?php echo $result6;?><br>
	2.5 kg  = <?php echo $result7;?><br>
	3.0 kg  = <?php echo $result8;?><br>
	3.5 kg  = <?php echo $result9;?><br>
	<br><br>--------------3--------------<br><br>
	2.0 kg  = <?php echo $result10;?><br>
	2.5 kg  = <?php echo $result11;?><br>
	3.0 kg  = <?php echo $result12;?><br>
	3.5 kg  = <?php echo $result13;?><br>
	
    <br><input type="submit" name="button1" value="计算">
</form>
    </BODY>
</HTML>
