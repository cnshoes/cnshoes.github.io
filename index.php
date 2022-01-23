<HTML>
    <HEAD>
        <TITLE>E邮宝 速卖通 运费</TITLE>
    </HEAD>
	<link rel="icon" href="epackets.png" type="epackets.png" >
    <BODY>
<?php
    if (isset($_POST["tag"])){
        $addend1=$_POST["addend1"];
        $addend2=$_POST["addend2"];
		$addend3=$_POST["addend3"];
		$addend4=$_POST["addend4"];
		$addend5=$_POST["addend5"];
		$addend6=$_POST["addend6"];
        $method =$_POST['method'];
    }else{
        $addend1=100;
        $addend2=0;
		$addend3=0;
		$addend4=76;
        $addend5=23;
		$addend6=1.2;
        $method ='+';
    }
	
	$huilv ='6.3';
	$e110 ='1.1';
	$e105 ='1.05';
	$e102 ='1.02';
	$etkzhekou ='1.1';
	$etkzhekoubj ='1.1';
	$emszhekou ='0.51';
	$xiaobaozhekou ='1.1';

     switch ($method){
        case '+':

/*武汉 E邮宝*/
			
$Ireland	 =($addend6*(	65	+	10	)+	25	)*$e105;
$Austria	 =($addend6*(	60	+	0	)+	25	)*$e105;
$Australia	 =($addend6*(	60	+	25	)+	19	)*$e105;
$Brazil	 =($addend6*(	80	+	55	)+	25	)*$e105;
$Belgium	 =($addend6*(	60	+	5	)+	25	)*$e105;
$Poland	 =($addend6*(	60	+	0	)+	25	)*$e105;
$Denmark	 =($addend6*(	60	+	5	)+	25	)*$e105;
$Germany	 =($addend6*(	60	+	0	)+	19	)*$e105;
$Russia	 =($addend6*(	55	+	5	)+	17	)*$e105;
$France	 =($addend6*(	60	+	5	)+	19	)*$e105;
$Finland	 =($addend6*(	65	+	15	)+	25	)*$e105;
$Kazakhstan	 =($addend6*(	70	+	0	)+	8	)*$e105;
$SouthKorea	 =($addend6*(	40	+	0	)+	20	)*$e105;
$Netherlands	 =($addend6*(	60	+	5	)+	25	)*$e105;
$Canada	 =($addend6*(	65	+	40	)+	19	)*$e105;
$Luxembourg	 =($addend6*(	60	+	15	)+	25	)*$e105;
$Malaysia	 =($addend6*(	40	+	0	)+	15	)*$e105;
$America	 =($addend6*(	70	+	30	)+	20	)*$e105;
$Mexico	 =($addend6*(	85	+	15	)+	25	)*$e105;
$Norway	 =($addend6*(	65	+	0	)+	19	)*$e105;
$Portugal	 =($addend6*(	65	+	0	)+	19	)*$e105;
$Japan	 =($addend6*(	50	+	0	)+	15	)*$e105;
$Sweden	 =($addend6*(	60	+	0	)+	19	)*$e105;
$Switzerland	 =($addend6*(	60	+	10	)+	25	)*$e105;
$SaudiArabia	 =($addend6*(	50	+	0	)+	26	)*$e105;
$Thailand	 =($addend6*(	45	+	0	)+	14	)*$e105;
$Turkey	 =($addend6*(	60	+	15	)+	25	)*$e105;
$Ukraine	 =($addend6*(	75	+	0	)+	6	)*$e105;
$Spain	 =($addend6*(	60	+	10	)+	14	)*$e105;
$Greece	 =($addend6*(	60	+	15	)+	25	)*$e105;
$Singapore	 =($addend6*(	40	+	0	)+	15	)*$e105;
$newZealand	 =($addend6*(	80	+	20	)+	10	)*$e105;
$Hungary	 =($addend6*(	60	+	0	)+	25	)*$e105;
$Israel	 =($addend6*(	60	+	0	)+	17	)*$e105;
$Italy	 =($addend6*(	60	+	5	)+	25	)*$e105;
$Indonesia	 =($addend6*(	45	+	0	)+	14	)*$e105;
$UK1	 =($addend6*(	55	+	5	)+	18	)*$e105;
$UK2	 =($addend6*(	45	+	5	)+	25	)*$e105;
$UK3	 =($addend6*(	45	+	5	)+	35	)*$e105;
$Vietnam	 =($addend6*(	45	+	10	)+	12	)*$e105;
$ChinaHongKong	 =($addend6*(	30	+	0	)+	17	)*$e105;




/*广东 E邮宝*/

$gdIreland	 =($addend6*(	65	+	20	)+	25	)*$e110;
$gdAustria	 =($addend6*(	60	+	5	)+	25	)*$e110;
$gdAustralia	 =($addend6*(	60	+	5	)+	19	)*$e110;
$gdBrazil	 =($addend6*(	80	+	70	)+	25	)*$e110;
$gdBelgium	 =($addend6*(	60	+	5	)+	25	)*$e110;
$gdPoland	 =($addend6*(	60	+	0	)+	25	)*$e110;
$gdDenmark	 =($addend6*(	60	+	5	)+	25	)*$e110;
$gdGermany	 =($addend6*(	60	+	10	)+	19	)*$e110;
$gdRussia	 =($addend6*(	55	+	15	)+	17	)*$e110;
$gdFrance	 =($addend6*(	60	+	5	)+	19	)*$e110;
$gdFinland	 =($addend6*(	65	+	15	)+	25	)*$e110;
$gdKazakhstan	 =($addend6*(	90	+	0	)+	8	)*$e110;
$gdSouthKorea	 =($addend6*(	40	+	0	)+	20	)*$e110;
$gdNetherlands	 =($addend6*(	60	+	10	)+	25	)*$e110;
$gdCanada	 =($addend6*(	65	+	70	)+	19	)*$e110;
$gdLuxembourg	 =($addend6*(	60	+	25	)+	25	)*$e110;
$gdMalaysia	 =($addend6*(	40	+	0	)+	15	)*$e110;
$gdAmerica	 =($addend6*(	70	+	70	)+	25	)*$e110;
$gdMexico	 =($addend6*(	85	+	85	)+	25	)*$e110;
$gdNorway	 =($addend6*(	65	+	25	)+	19	)*$e110;
$gdPortugal	 =($addend6*(	65	+	10	)+	19	)*$e110;
$gdJapan	 =($addend6*(	50	+	0	)+	15	)*$e110;
$gdSweden	 =($addend6*(	60	+	0	)+	19	)*$e110;
$gdSwitzerland	 =($addend6*(	60	+	10	)+	25	)*$e110;
$gdSaudiArabia	 =($addend6*(	50	+	0	)+	26	)*$e110;
$gdThailand	 =($addend6*(	45	+	0	)+	14	)*$e110;
$gdTurkey	 =($addend6*(	60	+	25	)+	25	)*$e110;
$gdUkraine	 =($addend6*(	80	+	0	)+	6	)*$e110;
$gdSpain	 =($addend6*(	60	+	5	)+	14	)*$e110;
$gdGreece	 =($addend6*(	60	+	15	)+	25	)*$e110;
$gdSingapore	 =($addend6*(	40	+	0	)+	15	)*$e110;
$gdnewZealand	 =($addend6*(	80	+	10	)+	10	)*$e110;
$gdHungary	 =($addend6*(	60	+	0	)+	25	)*$e110;
$gdIsrael	 =($addend6*(	60	+	25	)+	17	)*$e110;
$gdItaly	 =($addend6*(	60	+	20	)+	25	)*$e110;
$gdIndonesia	 =($addend6*(	45	+	0	)+	14	)*$e110;
$gdUK1	 =($addend6*(	55	+	0	)+	18	)*$e110;
$gdUK2	 =($addend6*(	45	+	0	)+	25	)*$e110;
$gdUK3	 =($addend6*(	45	+	10	)+	35	)*$e110;
$gdVietnam	 =($addend6*(	45	+	10	)+	12	)*$e110;
$gdChinaHongKong	 =($addend6*(	20	+	0	)+	17	)*$e110;

/*兴安 北京 E邮宝*/


$bjIreland	 =($addend6*(	75	+	0	)+	25	)*$e102;
$bjAustria	 =($addend6*(	80	+	0	)+	25	)*$e102;
$bjAustralia	 =($addend6*(	85	+	0	)+	19	)*$e102;
$bjBrazil	 =($addend6*(	135	+	0	)+	25	)*$e102;
$bjBelgium	 =($addend6*(	75	+	0	)+	25	)*$e102;
$bjPoland	 =($addend6*(	65	+	0	)+	25	)*$e102;
$bjDenmark	 =($addend6*(	75	+	0	)+	25	)*$e102;
$bjGermany	 =($addend6*(	60	+	0	)+	19	)*$e102;
$bjRussia	 =($addend6*(	60	+	0	)+	15	)*$e102;
$bjFrance	 =($addend6*(	65	+	0	)+	19	)*$e102;
$bjFinland	 =($addend6*(	80	+	0	)+	25	)*$e102;
$bjKazakhstan	 =($addend6*(	80	+	0	)+	8	)*$e102;
$bjSouthKorea	 =($addend6*(	40	+	0	)+	20	)*$e102;
$bjNetherlands	 =($addend6*(	75	+	0	)+	25	)*$e102;
$bjCanada	 =($addend6*(	105	+	0	)+	19	)*$e102;
$bjLuxembourg	 =($addend6*(	75	+	0	)+	25	)*$e102;
$bjMalaysia	 =($addend6*(	40	+	0	)+	15	)*$e102;
$bjAmerica	 =($addend6*(	100	+	0	)+	25	)*$e102;
$bjMexico	 =($addend6*(	100	+	0	)+	25	)*$e102;
$bjNorway	 =($addend6*(	65	+	0	)+	19	)*$e102;
$bjPortugal	 =($addend6*(	65	+	0	)+	19	)*$e102;
$bjJapan	 =($addend6*(	50	+	0	)+	15	)*$e102;
$bjSweden	 =($addend6*(	65	+	0	)+	19	)*$e102;
$bjSwitzerland	 =($addend6*(	75	+	0	)+	25	)*$e102;
$bjSaudiArabia	 =($addend6*(	50	+	0	)+	26	)*$e102;
$bjThailand	 =($addend6*(	45	+	0	)+	14	)*$e102;
$bjTurkey	 =($addend6*(	75	+	0	)+	25	)*$e102;
$bjUkraine	 =($addend6*(	75	+	0	)+	6	)*$e102;
$bjSpain	 =($addend6*(	70	+	0	)+	14	)*$e102;
$bjGreece	 =($addend6*(	75	+	0	)+	25	)*$e102;
$bjSingapore	 =($addend6*(	40	+	0	)+	15	)*$e102;
$bjnewZealand	 =($addend6*(	100	+	0	)+	10	)*$e102;
$bjHungary	 =($addend6*(	65	+	0	)+	25	)*$e102;
$bjIsrael	 =($addend6*(	60	+	0	)+	17	)*$e102;
$bjItaly	 =($addend6*(	65	+	0	)+	25	)*$e102;
$bjIndonesia	 =($addend6*(	45	+	0	)+	14	)*$e102;
$bjUK1	 =($addend6*(	75	+	0	)+	18	)*$e102;
$bjUK2	 =($addend6*(	65	+	0	)+	25	)*$e102;
$bjUK3	 =($addend6*(	65	+	0	)+	35	)*$e102;
$bjVietnam	 =($addend6*(	55	+	0	)+	12	)*$e102;
$bjChinaHongKong	 =($addend6*(	30	+	0	)+	17	)*$e102;



/*速卖通 公式*/

$gongsi1s = (($addend6-0.5)*2*$addend5+$addend4); /* 首重 续重 */

$gongsi2s = $addend6*$addend4+$addend5 ; /* 运费 + 挂号 */	

$aliexpress = (	$addend1 + $gongsi2s + 90 + 10 )/$huilv;

break;


$result = $addend1 + $addend2 + $addend3 + $addend4 + $addend5 + $addend6 ;
        
    }
?>


<form name="form1" method="post" action="#">

<ul><li>

     <input type="hidden" name="tag" size="4" value="1"><br>
	 
     <input type="text" name="addend1" size="4" style="width:66px;height:36px;" value="<?php echo $addend1;?>">
	 
     <select name="method">
        <option value='+'<?php if($method=='+')?>>+</option>
     </select>
	 
	 <input type="text" name="addend2" size="4" style="width:66px;height:36px;" value="<?php echo $addend2;?>">
	 
	 <select name="method">
        <option value='+'<?php if($method=='+')?>>+</option>
     </select>
	 
	 <input type="text" name="addend3" size="4" style="width:66px;height:36px;" value="<?php echo $addend3;?>">
	 

	 
	 
	 
	 &nbsp;&nbsp;<a href="http://127.0.0.1/2019/p2.php" >Home</a>
	 &nbsp;&nbsp;| <a href="https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&rsv_idx=1&tn=baidu&wd=%E7%BE%8E%E9%87%91" target="_blank"><?php echo $huilv;?></a>
	 &nbsp;&nbsp;| <a href="https://www.google.com/search?q=1+usd+to+cny" target="_blank">汇率</a>
	 &nbsp;&nbsp; <a href="http://127.0.0.1/2019/xgchinapost.php" target="_blank">西庚邮政小包</a>
	 &nbsp;&nbsp; <a href="http://127.0.0.1/2019/xgpostnl.php" target="_blank">西庚荷兰小包</a>
	 &nbsp;&nbsp; <a href="http://127.0.0.1/2019/xinganxiaobao.php" target="_blank">兴安中邮</a>
	 &nbsp;&nbsp; <a href="http://127.0.0.1/2019/xinganpostnl.php" target="_blank">兴安荷兰小包</a>
	 &nbsp;&nbsp; <a href="./yunfei.php" target="_blank">Yunfei</a>
	 
	 <br><br>
	 
	 
	 
	 <input type="text" name="addend4" size="4" style="width:66px;height:36px;" value="<?php echo $addend4;?>">
	 
	 <select name="method">
        <option value='+'<?php if($method=='+')?>>+</option>
     </select>
	 
	 <input type="text" name="addend5" size="4" style="width:66px;height:36px;" value="<?php echo $addend5;?>">
	 
	 <select name="method">
        <option value='+'<?php if($method=='+')?>></option>
     </select>
	 
	 *<input type="text" name="addend6" size="4" style="width:66px;height:36px;" value="<?php echo $addend6;?>">
	 
	 &nbsp;&nbsp;<input type="submit" name="button1" value="计算">
	 
	 &nbsp;&nbsp;&nbsp;&nbsp;<a href="http://127.0.0.1/2019/aliexpress.php" target="_blank">aliexpress</a>=$<?php echo number_format(	$aliexpress,'0');?>=<?php echo $gongsi2s;?>
	 
	 <br><br><font style="font-size:16px">重量：椰子 1.3/1.5 , 空军 1.2/1.4 新百伦 1.2/1.3 , 范思哲 1.7 , 麦昆 2 无盒 1.3, 乔丹 1.3/1.5/1.8 无盒1.1/1.2/1.5  , 拖鞋 0.7 ,皮带 0.7 , 小钱包 0.5/0.7, 双肩包 1/1.3 , 手表 0.5/0.6/1.5 , 短袖 0.4 , 短裤 0.7 , 童鞋 小0.6 大0.7, 帽子（盒子）0.5 ,  卫衣 0.9 </font><br><br>

</li></ul>

<div style="height:100px;"></div>

<style>

*{margin:1;padding: 0;}

   ul{

       list-style-type: none;

       overflow: hidden;

       background-color: #FFFFFF;

       position: fixed;

       top: 0;
	   
	   width: 100%;

   } 
   

   
   </style> 
	 
</form>


<table align="l" border="0" cellpadding="0" cellspacing="1" style="text-align: center;" width="100%" class="table_vs">
<thead><br><br><br><br>
<tr>

<td class="td1" >省外E邮宝&nbsp;<b><?php echo$e105;?></b></td>
<td class="td2" >广东E邮宝&nbsp;<b><?php echo$e110;?></b></td>
<td class="td3" ><b>兴安</b>北京E邮宝<b><?php echo$e102;?></b></td>
<td class="td4" >*AliExpress Shipping company*</td>
<td class="td5" >邮政小包 荷兰小包</td>
<td class="td5" >德国DHL Packet</td>
<td class="td7" ><b>兴安专线</b></td>
<td class="td8" >西庚 E特快 价格</td>
<td class="td9" >运费价格</td>

</tr>
</thead>
<tbody>

<tr >

<td class="td1"  ><br>

西班牙53	 =$<?php echo number_format((	$Spain	 +$addend1+53)/$huilv,'1')/*+53*/;?>=<?php echo	$Spain	;?><br>
西班牙<b>*2</b> 53	 =$<?php echo number_format((	$Spain	 +$addend1+$addend2+53+53)/$huilv,'1')/*+53+53*/;?>=<?php echo	$Spain	;?><br>

瑞士53	 =$<?php echo number_format((	$Switzerland	 +$addend1+53)/$huilv,'0')/*+53*/;?>=<?php echo	$Switzerland	;?><br>
瑞士	 =$<?php echo number_format((	$Switzerland	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Switzerland	;?><br>

意大利	 =$<?php echo number_format((	$Italy	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Italy	;?><br>
法国	 =$<?php echo number_format((	$France	 +$addend1+90)/$huilv,'0');?>=<?php echo	$France	;?><br>
美国	 =$<?php echo number_format((	$America	 +$addend1+90)/$huilv,'0');?>=<?php echo	$America	;?><br>
以色列	 =$<?php echo number_format((	$Israel	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Israel	;?><br>
德国	 =$<?php echo number_format((	$Germany	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Germany	;?><br>
墨西哥	 =$<?php echo number_format((	$Mexico	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Mexico	;?><br>
英国	 =$<?php echo number_format((	$UK1	 +$addend1+90)/$huilv,'0');?>=<?php echo	$UK1	;?><br>
<b>英国</b>	 =$<?php echo number_format((	$UK2	 +$addend1+90)/$huilv,'0');?>=<?php echo	$UK2	;?><br>
英国	 =$<?php echo number_format((	$UK3	 +$addend1+90)/$huilv,'0');?>=<?php echo	$UK3	;?><br>

爱尔兰	 =$<?php echo number_format((	$Ireland	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Ireland	;?><br>
奥地利	 =$<?php echo number_format((	$Austria	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Austria	;?><br>
澳大利亚	 =$<?php echo number_format((	$Australia	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Australia	;?><br>
巴西70	 =$<?php echo number_format((	$Brazil	 +$addend1+70)/$huilv,'0');?>=<?php echo	$Brazil	;?><br>
波兰	 =$<?php echo number_format((	$Poland	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Poland	;?><br>
丹麦	 =$<?php echo number_format((	$Denmark	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Denmark	;?><br>

俄罗斯	 =$<?php echo number_format((	$Russia	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Russia	;?><br>

芬兰	 =$<?php echo number_format((	$Finland	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Finland	;?><br>
哈萨克斯坦	 =$<?php echo number_format((	$Kazakhstan	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Kazakhstan	;?><br>
韩国	 =$<?php echo number_format((	$SouthKorea	 +$addend1+90)/$huilv,'0');?>=<?php echo	$SouthKorea	;?><br>
加拿大	 =$<?php echo number_format((	$Canada	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Canada	;?><br>
马来西亚	 =$<?php echo number_format((	$Malaysia	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Malaysia	;?><br>


挪威	 =$<?php echo number_format((	$Norway	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Norway	;?><br>
日本	 =$<?php echo number_format((	$Japan	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Japan	;?><br>
瑞典	 =$<?php echo number_format((	$Sweden	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Sweden	;?><br>

沙特阿拉伯	 =$<?php echo number_format((	$SaudiArabia	 +$addend1+90)/$huilv,'0');?>=<?php echo	$SaudiArabia	;?><br>
泰国	 =$<?php echo number_format((	$Thailand	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Thailand	;?><br>
土耳其	 =$<?php echo number_format((	$Turkey	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Turkey	;?><br>
乌克兰	 =$<?php echo number_format((	$Ukraine	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Ukraine	;?><br>

希腊	 =$<?php echo number_format((	$Greece	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Greece	;?><br>
新加坡	 =$<?php echo number_format((	$Singapore	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Singapore	;?><br>
新西兰	 =$<?php echo number_format((	$newZealand	 +$addend1+90)/$huilv,'0');?>=<?php echo	$newZealand	;?><br>
匈牙利	 =$<?php echo number_format((	$Hungary	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Hungary	;?><br>


印度尼西亚	 =$<?php echo number_format((	$Indonesia	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Indonesia	;?><br>

越南	 =$<?php echo number_format((	$Vietnam	 +$addend1+90)/$huilv,'0');?>=<?php echo	$Vietnam	;?><br>


</td>


<td class="td2"><br>


西班牙53	 =$<?php echo number_format((	$gdSpain	 +$addend1+53)/$huilv,'1')/*+53*/;?>=<?php echo	$gdSpain	;?><br>
西班牙<b>*2</b> 53	 =$<?php echo number_format((	$gdSpain	 +$addend1 +$addend2+53+53)/$huilv,'1')/*+53+53*/;?>=<?php echo	$gdSpain	;?><br>

瑞士53	 =$<?php echo number_format((	$gdSwitzerland	 +$addend1+53)/$huilv,'0')/*+53*/;?>=<?php echo	$gdSwitzerland	;?><br>

瑞士	 =$<?php echo number_format((	$gdSwitzerland	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdSwitzerland	;?><br>
意大利	 =$<?php echo number_format((	$gdItaly	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdItaly	;?><br>
法国	 =$<?php echo number_format((	$gdFrance	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdFrance	;?><br>
美国	 =$<?php echo number_format((	$gdAmerica	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdAmerica	;?><br>
以色列	 =$<?php echo number_format((	$gdIsrael	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdIsrael	;?><br>
德国	 =$<?php echo number_format((	$gdGermany	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdGermany	;?><br>
墨西哥	 =$<?php echo number_format((	$gdMexico	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdMexico	;?><br>
英国	 =$<?php echo number_format((	$gdUK1	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdUK1	;?><br>
<b>英国</b>	 =$<?php echo number_format((	$gdUK2	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdUK2	;?><br>
英国	 =$<?php echo number_format((	$gdUK3	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdUK3	;?><br>

爱尔兰	 =$<?php echo number_format((	$gdIreland	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdIreland	;?><br>
奥地利	 =$<?php echo number_format((	$gdAustria	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdAustria	;?><br>
澳大利亚	 =$<?php echo number_format((	$gdAustralia	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdAustralia	;?><br>
巴西70	 =$<?php echo number_format((	$gdBrazil	 +$addend1+70)/$huilv,'0');?>=<?php echo	$gdBrazil	;?><br>
波兰	 =$<?php echo number_format((	$gdPoland	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdPoland	;?><br>
丹麦	 =$<?php echo number_format((	$gdDenmark	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdDenmark	;?><br>

俄罗斯	 =$<?php echo number_format((	$gdRussia	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdRussia	;?><br>

芬兰	 =$<?php echo number_format((	$gdFinland	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdFinland	;?><br>
哈萨克斯坦	 =$<?php echo number_format((	$gdKazakhstan	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdKazakhstan	;?><br>
韩国	 =$<?php echo number_format((	$gdSouthKorea	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdSouthKorea	;?><br>
加拿大	 =$<?php echo number_format((	$gdCanada	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdCanada	;?><br>
马来西亚	 =$<?php echo number_format((	$gdMalaysia	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdMalaysia	;?><br>


挪威	 =$<?php echo number_format((	$gdNorway	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdNorway	;?><br>
日本	 =$<?php echo number_format((	$gdJapan	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdJapan	;?><br>
瑞典	 =$<?php echo number_format((	$gdSweden	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdSweden	;?><br>

沙特阿拉伯	 =$<?php echo number_format((	$gdSaudiArabia	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdSaudiArabia	;?><br>
泰国	 =$<?php echo number_format((	$gdThailand	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdThailand	;?><br>
土耳其	 =$<?php echo number_format((	$gdTurkey	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdTurkey	;?><br>
乌克兰	 =$<?php echo number_format((	$gdUkraine	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdUkraine	;?><br>

希腊	 =$<?php echo number_format((	$gdGreece	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdGreece	;?><br>
新加坡	 =$<?php echo number_format((	$gdSingapore	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdSingapore	;?><br>
新西兰	 =$<?php echo number_format((	$gdnewZealand	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdnewZealand	;?><br>
匈牙利	 =$<?php echo number_format((	$gdHungary	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdHungary	;?><br>


印度尼西亚	 =$<?php echo number_format((	$gdIndonesia	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdIndonesia	;?><br>

越南	 =$<?php echo number_format((	$gdVietnam	 +$addend1+90)/$huilv,'0');?>=<?php echo	$gdVietnam	;?><br>


</td>



<td class="td3"><br>
	


西班牙53	 =$<?php echo number_format((	$bjSpain	 +$addend1+53)/$huilv,'1')/*+53*/;?>=<?php echo	$bjSpain	;?><br>
西班牙<b>*2</b> 53	 =$<?php echo number_format((	$bjSpain	 +$addend1+$addend2+53+53)/$huilv,'1')/*+53+53*/;?>=<?php echo	$bjSpain	;?><br>

瑞士53	 =$<?php echo number_format((	$bjSwitzerland	 +$addend1+53)/$huilv,'0')/*+53*/;?>=<?php echo	$bjSwitzerland	;?><br>
瑞士	 =$<?php echo number_format((	$bjSwitzerland	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjSwitzerland	;?><br>

意大利	 =$<?php echo number_format((	$bjItaly	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjItaly	;?><br>
法国	 =$<?php echo number_format((	$bjFrance	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjFrance	;?><br>
美国	 =$<?php echo number_format((	$bjAmerica	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjAmerica	;?><br>
以色列	 =$<?php echo number_format((	$bjIsrael	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjIsrael	;?><br>
德国	 =$<?php echo number_format((	$bjGermany	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjGermany	;?><br>
墨西哥	 =$<?php echo number_format((	$bjMexico	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjMexico	;?><br>
英国	 =$<?php echo number_format((	$bjUK1	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjUK1	;?><br>
<b>英国</b>	 =$<?php echo number_format((	$bjUK2	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjUK2	;?><br>
英国	 =$<?php echo number_format((	$bjUK3	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjUK3	;?><br>

爱尔兰	 =$<?php echo number_format((	$bjIreland	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjIreland	;?><br>
奥地利	 =$<?php echo number_format((	$bjAustria	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjAustria	;?><br>
澳大利亚	 =$<?php echo number_format((	$bjAustralia	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjAustralia	;?><br>
巴西70	 =$<?php echo number_format((	$bjBrazil	 +$addend1+70)/$huilv,'0');?>=<?php echo	$bjBrazil	;?><br>
波兰	 =$<?php echo number_format((	$bjPoland	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjPoland	;?><br>
丹麦	 =$<?php echo number_format((	$bjDenmark	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjDenmark	;?><br>

俄罗斯	 =$<?php echo number_format((	$bjRussia	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjRussia	;?><br>

芬兰	 =$<?php echo number_format((	$bjFinland	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjFinland	;?><br>
哈萨克斯坦	 =$<?php echo number_format((	$bjKazakhstan	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjKazakhstan	;?><br>
韩国	 =$<?php echo number_format((	$bjSouthKorea	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjSouthKorea	;?><br>
加拿大	 =$<?php echo number_format((	$bjCanada	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjCanada	;?><br>
马来西亚	 =$<?php echo number_format((	$bjMalaysia	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjMalaysia	;?><br>


挪威	 =$<?php echo number_format((	$bjNorway	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjNorway	;?><br>
日本	 =$<?php echo number_format((	$bjJapan	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjJapan	;?><br>
瑞典	 =$<?php echo number_format((	$bjSweden	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjSweden	;?><br>

沙特阿拉伯	 =$<?php echo number_format((	$bjSaudiArabia	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjSaudiArabia	;?><br>
泰国	 =$<?php echo number_format((	$bjThailand	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjThailand	;?><br>
土耳其	 =$<?php echo number_format((	$bjTurkey	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjTurkey	;?><br>
乌克兰	 =$<?php echo number_format((	$bjUkraine	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjUkraine	;?><br>

希腊	 =$<?php echo number_format((	$bjGreece	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjGreece	;?><br>
新加坡	 =$<?php echo number_format((	$bjSingapore	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjSingapore	;?><br>
新西兰	 =$<?php echo number_format((	$bjnewZealand	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjnewZealand	;?><br>
匈牙利	 =$<?php echo number_format((	$bjHungary	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjHungary	;?><br>


印度尼西亚	 =$<?php echo number_format((	$bjIndonesia	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjIndonesia	;?><br>

越南	 =$<?php echo number_format((	$bjVietnam	 +$addend1+90)/$huilv,'0');?>=<?php echo	$bjVietnam	;?><br>
	
</td>


<?php
			/* 速卖通 无忧 价格 AliExpress Shipping company */
			
			$spaincairmb=   53.87*$addend6 + 20.81 ; /* 西班牙 51.3+19.82 new */ 
			
			$brazilcairmb1= 97.85*$addend6 + 25.75 ;  /* 巴西 1 95+25 new*/
			$brazilcairmb2= 108.15*$addend6 + 25.75 ; /* 巴西 2 105+25 new*/
			$brazilcairmb3= 87.55*$addend6 + 36.05 ; /* 巴西 3 85+35 new*/
			
			$itcairmb=     50.36*$addend6 + 24.64 ; /* 意大利 25.3 new*/
			$frcairmb=     68.67*$addend6 + 14.33 ; /* 法国 new*/
			$decairmb=     57.52*$addend6+ 19.17 ; /* 德国 new*/
			$ukcairmb=     53.77*$addend6 + 18.41 ; /* 英国 new*/
			$uscairmb=     92.96*$addend6 + 12.32 ; /* 美国 new*/
			$iscairmb=     100*$addend6 +  16.65 ; /* 以色列 */
			$croatiarmb= 85.26*$addend6+22.04 ;/* 克罗地亚 73.5+19 new*/
			$polandrmb= 59.80*$addend6+15.8 ;/* 波兰  59.80+15.8  */
			$swedencairmb= 73.8*$addend6+19.2 ;/* 瑞典   73.8+19.2 */
			$chilecairmb=  123*$addend6 + 25 ; /* 智利 */
			$mexicormb=  105.65*$addend6 + 20.35 ; /* 墨西哥  105.65+20.35 */
			
			$ruishihlcairmb1= 109.2*$addend6 + 25.2 ; /* 瑞士1 new*/
			$ruishihlcairmb2= 94.8*$addend6 + 21.6 ; /* 瑞士 2 new*/
			$ruishihlcairmb3= 84*$addend6 + 21.48 ; /* 瑞士 3 new*/
			
			$helancairmb= 61.8*$addend6 + 24.38 ; /* 荷兰 new*/
			$bilishicairmb= 69.55*$addend6 + 20.29 ; /* 比利时 new*/
			
			$newcairmb=    68.8*$addend6 + 24 ; /* 新西兰 68.8+24 */
			$newcairmbbig = (($addend6-0.5)*2*35.2+95.9); /* 新西兰包裹 95.9+35.2 */
			
			
			/* 速卖通 1 */
			
			$spaincai =   ($addend1 + $spaincairmb + 53 +10)/ $huilv ; /* 西班牙 +53*/
			$spaincai2 =   ($addend1 + $addend2+ $spaincairmb + 53 + 53 +5 +10)/ $huilv ; /* 西班牙 +53+53 */
			
			$brazilcai1 = ($addend1 + $brazilcairmb1 + 90 +10) / $huilv ;  /* 巴西 */
			$brazilcai2 = ($addend1 + $brazilcairmb2 + 90 +10) / $huilv ;  /* 巴西 */
			$brazilcai3 = ($addend1 + $brazilcairmb3 + 70 +10) / $huilv ;  /* 巴西 */
			
			$itcai =     ($addend1 + $itcairmb + 90 +10) / $huilv ;	/* 意大利 */
			$frcai =     ($addend1 + $frcairmb + 90 +10)/ $huilv ;	/* 法国 */
			$decai = 	 ($addend1 + $decairmb + 90 +10) / $huilv ;	/* 德国 */
			$ukcai = 	 ($addend1 + $ukcairmb + 90 +10) / $huilv ;	/* 英国 */
			$uscai = 	 ($addend1 + $uscairmb + 90 +10) / $huilv ;	/* 美国 */
			$iscai = 	 ($addend1 + $iscairmb + 90 +10) / $huilv ;	/* 以色列 */
			$croatiacai =($addend1 + $croatiarmb + 90 +10) / $huilv ;	/* 克罗地亚 */
			$polandcai =($addend1 + $polandrmb + 90 +10) / $huilv ;	/* 波兰 */
			$swedencai = ($addend1 + $swedencairmb + 90 +10) / $huilv ;  /* 瑞典 */
			
			$helancai= 	 ($addend1 + $helancairmb + 90 +10) / $huilv ;	/* 荷兰 */
			$bilishicai= ($addend1 + $bilishicairmb + 90 +10) / $huilv ;	/* 比利时 */
			
			$chilecai  = ($addend1 + $chilecairmb + 90 +10) / $huilv ;  /* 智利 */
			
			$ruishihlcai1 = ($addend1 + $ruishihlcairmb1 + 90 +10) / $huilv ;  /* 瑞士 */
			$ruishihlcai2 = ($addend1 + $ruishihlcairmb2 + 90 +10) / $huilv ;  /* 瑞士 */
			$ruishihlcai3 = ($addend1 + $ruishihlcairmb3 + 90 +10) / $huilv ;  /* 瑞士 */
			
			$newcai = ($addend1 + $newcairmb + 90 +10) / $huilv ;  /* 新西兰 68.8+24 */

						
?>

<td class="td4"><br>
	
	西班牙53 =$<?php echo number_format($spaincai,'0');?>=<?php echo	$spaincairmb	;?><br><br>
	西班牙<b>*2</b> =$<?php echo number_format($spaincai2,'0');?>=<?php echo	$spaincairmb	;?><br><br>
	<b>巴西3-70</b> =$<?php echo number_format($brazilcai3,'0');?>=<?php echo $brazilcairmb3;?> | 450~2000g<br><br>

	意大利 =$<?php echo number_format($itcai,'0');?>=<?php echo $itcairmb;?><br>
	法国   =$<?php echo number_format($frcai,'0');?>=<?php echo $frcairmb;?><br>
	德国   =$<?php echo number_format($decai,'0');?>=<?php echo $decairmb;?><br><br>
	英国   =$<?php echo number_format($ukcai,'0');?>=<?php echo $ukcairmb;?><br>
	美国   =$<?php echo number_format($uscai,'0');?>=<?php echo $uscairmb;?><br>
	以色列 =$<?php echo number_format($iscai,'0');?>=<?php echo $iscairmb;?><br>
	克罗地亚 =$<?php echo number_format($croatiacai,'0');?>=<?php echo $croatiarmb;?><br>
	智利   =$<?php echo number_format($chilecai,'0');?>=<?php echo $chilecairmb;?><br>
	墨西哥	 =$<?php echo number_format((	$mexicormb	 +$addend1+90+10)/$huilv,'0');?>=<?php echo	$mexicormb	;?><br>
	荷兰 =$<?php echo number_format($helancai,'0');?>=<?php echo $helancairmb;?><br>
	比利时 =$<?php echo number_format($bilishicai,'0');?>=<?php echo $bilishicairmb;?><br>
	瑞典   =$<?php echo number_format($swedencai,'0');?>=<?php echo $swedencairmb;?><br><br>
	
	巴西1  =$<?php echo number_format($brazilcai1,'0');?>=<?php echo $brazilcairmb1;?> | 0~300g<br>
	巴西2  =$<?php echo number_format($brazilcai2,'0');?>=<?php echo $brazilcairmb2;?> | 300~450g<br><br>
	
	
	瑞士1 = $<?php echo number_format($ruishihlcai1,'0');?>=<?php echo $ruishihlcairmb1;?> | 0~300g<br>
	瑞士2 = $<?php echo number_format($ruishihlcai2,'0');?>=<?php echo $ruishihlcairmb2;?> | 300~450g<br>
	<b>瑞士3</b> =$<?php echo number_format($ruishihlcai3,'0');?>=<?php echo $ruishihlcairmb3;?> | 450~2000g<br><br>
	
	新西兰 =$<?php echo number_format($newcai,'0');?>= <?php echo $newcairmb;?><br><br>
	新西兰 包裹 = <?php echo $newcairmbbig;?><br><br>
	
	
</td>


<?php 

			/* 邮政小包 */
			
			
			$gongsi = ($addend6*$addend4+$addend5)*$xiaobaozhekou ;
			
			$xb1= ($addend1 + $gongsi + 90 )/$huilv ; /* 邮政小包1 */
			
			$xb2= ($addend1 + $addend2 + $gongsi + 180 )/$huilv ; /* 邮政小包2 */
			
			
			/* 荷兰小包1  */
			
			$gongsi2 = $addend6*$addend4+$addend5 ;
			
			$helanxb1= ($addend1 + $gongsi2 + 90 )/$huilv ; /* 荷兰小包1 无折扣 */
			
			$helanxb2= ($addend1 + $addend2 + $gongsi2 + 180 )/$huilv ; /* 荷兰小包2 无折扣 */
			
			
			/* 兴安德国DHL 小包运费 */
			
			
			$deDHL2 = $addend6*131+34;
			
			$deDHL2s = ($addend6-0.5)*2*50+140+$addend6*10 ; /*  德国DHl专线 10 附加费 */
			
			
			/* 西庚德国DHL 小包 */
			
			$deDHL = $addend6*138+32;
			
			$desq1 = ($addend1 + $deDHL + 90) / $huilv ;  /*  德国双清专线 138+32 */
			
			$desq2 = ($addend1 + $addend2 + $deDHL + 180) / $huilv ;  /*  德国双清专线2 138+32 */
			
			$desq3 = ($addend1 + $addend2 + $addend6 + $deDHL + 270) / $huilv ;  /*  德国双清专线3 138+32 */
			
			/* 兴安德国DHL 小包 */
			
			$desq1x = ($addend1 + $deDHL2 + 90) / $huilv ;  /*  兴安 德国DHL 103+45 */
			
			$desq2x = ($addend1 + $addend2 + $deDHL2 + 180) / $huilv ;  /*  兴安 德国DHL 103+45 */
			
			$desq3x = ($addend1 + $addend2 + $addend6 + $deDHL2 + 270) / $huilv ;  /*  兴安 德国DHL 103+45 */
			
			/* 兴安德国包税 线路 */
			
			$desq1xs = ($addend1 + $deDHL2s +90 ) / $huilv ;  /*  兴安 德国包税DHL 140-50 */
			
			$desq2xs = ($addend1 + $addend2 + $deDHL2s + 180) / $huilv ;  /*  兴安 德国包税DHL 140-50 */
			
			$desq3xs = ($addend1 + $addend2 + $addend6 + $deDHL2s + 270 ) / $huilv ;  /*  兴安 德国包税DHL 140-50 */
			
			
			/* 兴安带电 以及专线 */


$baxizx1 = 145*$addend6+37 ;
$baxizx11 = ($addend1 + $baxizx1 + 90) / $huilv ; /* 巴西专线1 */
$baxizx12 = ($addend1 + $addend2 + $baxizx1 + 180) / $huilv ; /* 巴西专线2 */
$baxizx13 = ($addend1 + $addend2 + $addend6 +$baxizx1 + 270) / $huilv ; /* 巴西专线3 */

$freyoubaod1 =     ($addend1 +(75*$addend6 + 19)*$e110 + 90) / $huilv ;/* 法国   75+19  1.1折扣*/
$iteyoubaod1 =     ($addend1 +(85*$addend6 + 25)*$e110 + 90) / $huilv ;/* 意大利 85+25  1.1折扣*/
$spaineyoubaod1 =  ($addend1 +(75*$addend6 + 14)*$e110 + 55) / $huilv ;/* 西班牙 75+14  1.1折扣*/

$chilezx = 213*$addend6+37 ; /* 智利专线  */
$chilezx1 = ($addend1 + $chilezx + 90) / $huilv ; /* 智利专线1 213+37 */


$chilezx2 = 145*$addend6+53 ; /* 智利专线小包 其他  */
$chilezx12 = ($addend1 + $chilezx2 + 90) / $huilv ; /* 智利专线小包 其他 2 145+53 */

?>

<td class="td5"  ><br>

<br>-----邮政小包 1-----<br><br>

	邮政小包 1 = $<?php echo number_format($xb1,'0');?><br>
	
	<br>-----邮政小包 2-----<br><br>
	
	邮政小包 2 = $<?php echo number_format($xb2,'0');?><br>
	
	<br>-----公式价格-----<br><br>
	
	邮政 1.1 折扣 = <?php echo $gongsi;?><br><br>
	
	<b>荷兰 无折扣 = <?php echo $gongsi2;?></b><br>
	
	
	<br>-----荷兰小包 1-----<br><br>

	
	荷兰小包 1 = $<?php echo number_format($helanxb1,'0');?><br>
	
	
	<br>-----荷兰小包 2-----<br><br>
	
	
	荷兰小包 2 = $<?php echo number_format($helanxb2,'0');?><br>
	
	
	<br>---<b>兴安</b> E邮宝 带电 <?php echo$e110;?>---<br><br>

	西班牙 电 = $<?php echo number_format($spaineyoubaod1,'0');?> (注意+55)<br><br>
	
	意大利 电 = $<?php echo number_format($iteyoubaod1,'0');?> <br><br>
	
	法国 电 = $<?php echo number_format($freyoubaod1,'0');?> <br>
	
	<br>-智利专线-Chile Post SRP-<br><br>
	
	
	智利专线1 = $<?php echo number_format($chilezx1,'0');?><br><br>
	
	
	智利专线 其他 = $<?php echo number_format($chilezx12,'0');?><br><br>

	
	
	
</td>


<td class="td6"><br>


德国DHL 138+32<br>
兴安德国小包 131+34<br>
包税 140-50 *10kg<br>


<br>---------价格---------<br><br>
	
	
	西庚 德国专线 = <?php echo $deDHL;?><br>
	
	兴安 德国小包 = <?php echo $deDHL2;?><br>
	
	兴安 德国包税 = <?php echo $deDHL2s;?><br>
	
	
	<br>---------1---------<br><br>
	
	西庚 德国专线 = $<?php echo number_format($desq1,'0');?><br>
				   
	兴安 德国小包 = $<?php echo number_format($desq1x,'0');?><br>
				   
	兴安 德国包税 = $<?php echo number_format($desq1xs,'0');?><br>
	
	<br>---------2---------<br><br>
	

	西庚 德国专线 = $<?php echo number_format($desq2,'0');?><br>
				   
	兴安 德国小包 = $<?php echo number_format($desq2x,'0');?><br>
				   
	兴安 德国包税 = $<?php echo number_format($desq2xs,'0');?><br>
	
	
	<br>---------3---------<br><br>
	

	西庚 德国专线 = $<?php echo number_format($desq3,'0');?><br>
	
	兴安 德国小包 = $<?php echo number_format($desq3x,'0');?><br>
	
	兴安 德国包税 = $<?php echo number_format($desq3xs,'0');?><br>
	
	
		<br>---<b>兴安</b> 巴西专线---<br>145+37 (0-4.5kg)<br>
	
	巴西专线价格 = <?php echo $baxizx1?><br>
	
	<br>----------------------<br>
	
	巴西专线1 = $<?php echo number_format($baxizx11,'0');?><br>
	
	巴西专线2 = $<?php echo number_format($baxizx12,'0');?><br>
	
	巴西专线3 = $<?php echo number_format($baxizx13,'0');?><br>
	

	
	
</td>




<?php


/* 兴安 墨西哥专线 */
			
		$mexicoxin = $addend6*170+42;
		
		$mexicoxin1 = ($addend1 + $mexicoxin + 90 ) / $huilv ; 
		$mexicoxin2 = ($addend1 + $addend2 + $mexicoxin + 180 ) / $huilv ;
		$mexicoxin3 = ($addend1 + $addend2 + $addend6 + $mexicoxin + 270 ) / $huilv ;
		
		
/* 兴安 英国专线 */

		$ukline = $addend6*123+40;
		
		$ukline1 = ($addend1 + $ukline + 90 ) / $huilv ; 
		$ukline2 = ($addend1 + $addend2 + $ukline + 180 ) / $huilv ;
		$ukline3 = ($addend1 + $addend2 + $addend6 + $ukline + 270 ) / $huilv ;
			
			

?>

<td class="td7"><br>
	
	
	英国专线3kg 123+40 <br><br>
	
	价格 = <?php echo $ukline?>

	<br>----------1----------<br>
	
	英国专线 1 = $<?php echo number_format($ukline1,'0');?>
	
	<br>----------2----------<br>
	
	英国专线 2 = $<?php echo number_format($ukline2,'0');?>
	
	<br>----------3----------<br>
	
	英国专线 3 = $<?php echo number_format($ukline3,'0');?><br><br>
	
	<br>--------------------<br>
	
	墨西哥专线2kg 170+42 <br><br>
	
	价格 = <?php echo $mexicoxin?>

	<br>----------1----------<br>
	
	墨 1 = $<?php echo number_format($mexicoxin1,'0');?>
	
	<br>----------2----------<br>
	
	墨 2 = $<?php echo number_format($mexicoxin2,'0');?>
	
	<br>----------3----------<br>
	
	墨 3 = $<?php echo number_format($mexicoxin3,'0');?><br>
	
	
</td>	


<?php 
			/* 运费 价格 */
			

			/* 中东专线 */
			
		
			$shatecnb1 = (($addend6-0.5)*2*68+150);
			$keweitecnb1 = (($addend6-0.5)*2*78+180+$addend6*23) ;
			
			/* E特快  广州*/
			
			$keweiteetk=(($addend6-0.05)*20*2.5+100)*$etkzhekou ;
			$shateetk=(($addend6-0.05)*20*2+90)*$etkzhekou ; 
			
			$nanfeietk=(($addend6-0.05)*20*3+100)*$etkzhekou ; 
			
			$tuetk=(($addend6-0.05)*20*3.5+120)*$etkzhekou ;
			$xinetk=(($addend6-0.05)*20*1.2+70)*$etkzhekou ; /* 新加坡 E特快 特邮 70+1.2  */
			$ausetk=(($addend6-0.05)*20*3+69)*$etkzhekou ; /* 澳大利亚 E特快 特邮 69+3  */
			
			$itetkgz=(($addend6-0.05)*20*3.8+130)*$etkzhekoubj ; 
			
			/* E特快  北京*/
			
			
			$itetk=(($addend6-0.05)*20*3+130)*$etkzhekoubj ; 
			$fretk=(($addend6-0.05)*20*2.5+105)*$etkzhekoubj ;
			$mexicoetkbj=(($addend6-0.05)*20*3+100)*$etkzhekoubj ; /* E特快  北京*/
			
			$uketk=(($addend6-0.05)*20*3+70)*$etkzhekoubj ;
			$newetk=(($addend6-0.05)*20*3+50)*$etkzhekoubj ; 
			

			
			

?>

<td class="td8">
	<br>--------------1--------------<br>
	

	
	沙特 CNB =$<?php echo number_format((	$shatecnb1	 +$addend1+90 )/$huilv,'0');?>=<?php echo $shatecnb1;?><br>
	科威特 CNB =$<?php echo number_format((	$keweitecnb1	 +$addend1+90 )/$huilv,'0');?>=<?php echo $keweitecnb1;?><br>
	
	<br>--------------2--------------<br>
	
	
	沙特 CNB =$<?php echo number_format((	$shatecnb1	 +$addend1+$addend2+180 )/$huilv,'0');?>=<?php echo $shatecnb1;?><br>
	科威特 CNB =$<?php echo number_format((	$keweitecnb1	 +$addend1+$addend2+180 )/$huilv,'0');?>=<?php echo $keweitecnb1;?><br>
	
	<br>--------------3--------------<br>
	
	沙特 CNB =$<?php echo number_format((	$shatecnb1	 +$addend1+$addend2+$addend3+270 )/$huilv,'0');?>=<?php echo $shatecnb1;?><br>
	科威特 CNB =$<?php echo number_format((	$keweitecnb1	 +$addend1+$addend2+$addend3+270 )/$huilv,'0');?>=<?php echo $keweitecnb1;?><br>
	
	<br>--------<b>广州</b> E特快 <b><?php echo $etkzhekou;?></b>--------<br><br>
	
	沙特阿拉伯 ETK =$<?php echo number_format((	$shateetk	 +$addend1+90 )/$huilv,'0');?>=<?php echo $shateetk;?><br><br>
	科威特 ETK =$<?php echo number_format((	$keweiteetk	 +$addend1+90 )/$huilv,'0');?>=<?php echo $keweiteetk;?><br><br>
	
	南非 ETK = $<?php echo number_format((	$nanfeietk	 +$addend1+90 )/$huilv,'0');?>=<?php echo $nanfeietk;?><br><br>
	意大利 ETK =$<?php echo number_format((	$itetkgz	 +$addend1+90 )/$huilv,'0');?>=<?php echo $itetkgz;?><br>
	
	<br>--------<b>北京</b> E特快 <b><?php echo $etkzhekoubj;?></b>--------<br><br>
	

	意大利 ETK =$<?php echo number_format((	$itetk	 +$addend1+90 )/$huilv,'0');?>=<?php echo $itetk;?><br><br>
	法国 ETK =$<?php echo number_format((	$fretk	 +$addend1+90 )/$huilv,'0');?>=<?php echo $fretk;?><br><br>
	英国 ETK =$<?php echo number_format((	$uketk	 +$addend1+90 )/$huilv,'0');?>=<?php echo $uketk;?><br><br>
	新西兰 ETK =$<?php echo number_format((	$newetk	 +$addend1+90 )/$huilv,'0');?>=<?php echo $newetk;?><br><br>
	墨西哥 <b>北京 ETK</b> = $<?php echo number_format((	$mexicoetkbj	 +$addend1+90 )/$huilv,'0');?>=<?php echo $mexicoetkbj;?><br><br>
	
	突尼斯,以色列 ETK =$<?php echo number_format((	$tuetk	 +$addend1+90 )/$huilv,'0');?>=<?php echo $tuetk;?><br><br>
	新加坡 ETK =$<?php echo number_format((	$xinetk	 +$addend1+90 )/$huilv,'0');?>=<?php echo $xinetk;?><br><br>
	澳大利亚 ETK = <?php echo $ausetk;?>
	
	
	
</td>

<?php 


			
/* 西庚 德国DHL 专线 双清包税  */
			
			
			$xgdedhl1 = ($addend6-0.5)*2*53+148 ;  /* 德国 、奥地利、荷兰、比利时、捷克、波兰 148+53 */
			
			$xgdedhl2 = ($addend6-0.5)*2*53+153 ;  /* 英国 、法国、意大利、西班牙、瑞典、芬兰、丹麦、爱尔兰 葡萄牙、卢森堡、希腊、匈牙利、罗马尼亚、斯洛伐克 斯洛文尼亚、克罗地亚、爱沙尼亚、立陶宛、保加利亚、拉脱维亚 153+53 */
			
			$maerta2  = ($addend6-0.5)*2*53+208 ;  /* 马耳他 208+53 */
			
			
/* 兴安 德国DHL 专线 双清包税  */


			$euems = (($addend6-0.5)*2*75+280)*$emszhekou ;
			
			/*  $euetk = (($addend4-0.5)*2*75+280)*$etkzhekou + $addend4*24 ;

				欧洲6区 广州E特快 = <?php echo $euetk;?><br><br>
			
			*/
			
			$newems = (($addend6-0.5)*2*55+210)*$emszhekou ;
			
			$peems8 = (($addend6-0.5)*2*100+335)*$emszhekou ; /*秘鲁*/
			
			$peetk2s=((($addend6-0.05)*20*5+120)*1.1) ; /* 西庚 秘鲁 E特快 特邮 125+4.5*/
			
			
			$xingandedhl  = ($addend6-0.5)*2*50+140 + $addend6*10 ;  /* 德国DHL 专线 包税专线 140+50 */
			
			$xingandedhl2 = ($addend6-0.5)*2*50+150 + $addend6*10 ;  /* 德国DHL 专线 包税专线 150+50 */
			
			$maerta = ($addend6-0.5)*2*50+205 + $addend6*10 ;  /* 马耳他 德国DHL 专线 包税专线 205+50 */
			

?>

<td class="td9"  >

	<br>-----广州 EMS <?php echo $emszhekou;?>-----<br><br>

	
	欧洲6区 欧 = <?php echo $euems;?><br><br>
	
	新西兰 EMS = <?php echo $newems;?><br><br>
	
	秘鲁8区 EMS = <?php echo $peems8;?><br><br>
	
	
	<br>-----<b>西庚</b>欧洲双清包税-----<br><br>
	
	欧洲双清包税 = <?php echo $xgdedhl1;?>|<?php echo $xgdedhl2;?><br><br>
	
	
	马耳他 = <?php echo $maerta2;?> <br>
	
	<br><b>-----兴安</b>德国DHL专线-----<br><br>
	
	
	德国DHL专线 = <?php echo $xingandedhl;?>|<?php echo $xingandedhl2;?><br><br>


	马耳他 = <?php echo $maerta;?> <br>
	
	
	
	<br>-----公式-----<br><br>
	
	
	
	
	首重+续重 = <?php echo $gongsi1s;?><br>
	
	运费+挂号 = <?php echo $gongsi2s;?><br>
	
</td>





</tr>
</tbody>
</table>


