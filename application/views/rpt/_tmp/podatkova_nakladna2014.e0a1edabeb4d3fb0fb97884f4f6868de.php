<?php if(!class_exists('raintpl')){exit;}?><style type="text/css">
	body, html, td{
		font-size:10px;
		line-height:10px;
	}
</style>
<div class="page">
<table width="778" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="350" align="left">
        <table width="260" border="0" cellpadding="0" cellspacing="0" class="table_border">
          <tr>
		    <td rowspan="2">Паперова</td>
            <td>Оригінал (видається покупцю)</td>
            <td height="10" colspan="2" align="center">X</td>
          </tr>
          <tr>
            <td>Копія (залишається у продавця)</td>
            <td height="10" colspan="2" align="center"></td>
          </tr>
          <tr>
            <td colspan="2">Електронна</td>
            <td height="10" colspan="2" align="center"></td>
            </tr>
		<tr>
            <td colspan="2">Підлягає реєстрації в ЄРПН</td>
            <td height="10" colspan="2" align="center"><?php if( $v["head"]["inernn"]==1 ){ ?>X<?php }else{ ?>&nbsp;<?php } ?></td>
            </tr>
          <tr>
            <td colspan="2" rowspan="2">Усі примірники залишаються у продавця <br />(тип причини)</td>
            <td height="10" colspan="2" align="center"><?php echo $v["stay_at_seller"];?></td>
            </tr>
          <tr>
            <td width="14" height="10" align="center"><?php echo substr($v["extra"]->type_of_reason,0,1); ?></td>
            <td width="14" height="10" align="center"><?php echo substr($v["extra"]->type_of_reason,1,1); ?></td>
            </tr>
        </table>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(потрібне виділити поміткою "Х")
        </td>
        <td width="350" align="right" valign="top">
        <table>
          <tr>
            <td align="left" valign="middle" class="medium">ЗАТВЕРДЖЕНО<br />
                Наказ Міністерства доходів і зборів України<br />
                14 січня 2014 року №10</td>
          </tr>
        </table>
</td>
      </tr>
      <tr>
        <td height="30" colspan="2" align="center" valign="top" class="bigest"><strong>ПОДАТКОВА НАКЛАДНА</strong></td>
        </tr>
      <tr>
        <td valign="top"><table width="350" cellpadding="0" cellspacing="0">
          <tr>
            <td class="medium">Дата складання податкової накладної</td>
            <td>
            <table class="table_border"><tr><td class="cell"><?php echo $v["date"]["0"];?></td><td class="cell"><?php echo $v["date"]["1"];?></td><td class="cell"><?php echo $v["date"]["2"];?></td><td class="cell"><?php echo $v["date"]["3"];?></td><td class="cell"><?php echo $v["date"]["4"];?></td><td class="cell"><?php echo $v["date"]["5"];?></td><td class="cell"><?php echo $v["date"]["6"];?></td><td class="cell"><?php echo $v["date"]["7"];?></td></tr></table>
            </td>
          </tr>
        </table></td>
        <td valign="top"><table width="100%" cellpadding="0" cellspacing="0" align="right">
          <tr>
            <td class="medium">Порядковий номер</td>
            <td rowspan="2" align="right">
            
            <table border="0" cellpadding="0" cellspacing="0"><tr>
            <td><table class="table_border"><tr><td class="cell"><?php echo $v["view_num_fill"]["0"];?></td><td class="cell"><?php echo $v["view_num_fill"]["1"];?></td><td class="cell"><?php echo $v["view_num_fill"]["2"];?></td><td class="cell"><?php echo $v["view_num_fill"]["3"];?></td><td class="cell"><?php echo $v["view_num_fill"]["4"];?></td><td class="cell"><?php echo $v["view_num_fill"]["5"];?></td><td class="cell"><?php echo $v["view_num_fill"]["6"];?></td></tr></table>
            </td><td class="cell">/</td>
			<td class="cell"><table class="table_border"><tr><td class="cell">&nbsp;</td></tr></table></td><td class="cell">/</td>
			<td>
            <table class="table_border"><tr><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td></tr>
            </table>
            </td></tr>
              <tr style="margin:0px;padding:0px">
                <td>&nbsp;</td>
                <td class="cell">&nbsp;</td>
                <td align="center"><span class="tiny"><sup>(1)</sup> </span></td>
                <td align="center">&nbsp;</td>
                <td align="center">(номер філії)</td>
              </tr>
            
            
            </table>
            
            </td>
          </tr>
          <tr>
            <td class="medium">&nbsp;</td>
          </tr>
        </table></td> 
      </tr>
      <tr>
        <td valign="top"><table width="360" border="0" cellpadding="0" cellspacing="1">
          <tr>
            <td>&nbsp;</td>
            <td colspan="2"><b class="medium">Продавець</b></td>
            </tr>
          <tr>
            <td align="left">Особа (платник<br />
              податку) - продавець</td>
            <td height="50" colspan="2" align="right" class="medium" style="border:1px #000 solid"><?php echo $v["a"]["company_name"];?> &nbsp;</td>
            </tr>
          <tr>
            <td align="left">&nbsp;</td>
            <td colspan="2" align="center"><span class="small">(найменування; прізвище, ім'я, по батькові - для фізичної особи - підприємця)</span></td>
            </tr>
          <tr>
            <td height="25" align="left">&nbsp;</td>
            <td colspan="2" align="center"><table align="center" class="table_border">
              <tr>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["0"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["1"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["2"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["3"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["4"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["5"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["6"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["7"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["8"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["9"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["10"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["11"];?></td>
              </tr>
            </table></td>
            </tr>
          <tr>
            <td align="left">&nbsp;</td>
            <td colspan="2" align="center"><span class="small">(індивідуалний податковий номер продавця)</span></td>
            </tr>
          <tr>
            <td height="40" align="left">Місцезнаходження (податкова адреса) продавця</td>
            <td colspan="2" align="right" valign="bottom" class="medium" style="border-bottom:1px #000 solid"><?php echo $v["a"]["company_jaddress"];?> </td>
            </tr>
          <tr>
            <td height="40" align="left">Номер телефону</td>
            <td width="45">&nbsp;</td>
            <td width="215" align="left"><table class="table_border">
              <tr>
                <td class="cell"><?php echo $v["a"]["company_phone"]["0"];?></td>
                <td class="cell"><?php echo $v["a"]["company_phone"]["1"];?></td>
                <td class="cell"><?php echo $v["a"]["company_phone"]["2"];?></td>
                <td class="cell"><?php echo $v["a"]["company_phone"]["3"];?></td>
                <td class="cell"><?php echo $v["a"]["company_phone"]["4"];?></td>
                <td class="cell"><?php echo $v["a"]["company_phone"]["5"];?></td>
                <td class="cell"><?php echo $v["a"]["company_phone"]["6"];?></td>
                <td class="cell"><?php echo $v["a"]["company_phone"]["7"];?></td>
                <td class="cell"><?php echo $v["a"]["company_phone"]["8"];?></td>
                <td class="cell"><?php echo $v["a"]["company_phone"]["9"];?></td>
              </tr>
            </table></td>
            </tr>
        </table>
          <p>&nbsp;</p></td>
        <td align="right" valign="top"><table width="360" border="0" cellspacing="1" cellpadding="0">
          <tr>
            <td>&nbsp;</td>
            <td colspan="2"><b class="medium">Покупець</b></td>
          </tr>
          <tr>
            <td align="left">Особа (платник<br />
              податку) - покупець</td>
            <td height="50" colspan="2" align="right" class="medium" style="border:1px #000 solid"><?php echo $v["p"]["company_name"];?> &nbsp;</td>
          </tr>
          <tr>
            <td align="left">&nbsp;</td>
            <td colspan="2" align="center"><span class="small">(найменування; прізвище, ім'я, по батькові - для фізичної особи - підприємця)</span></td>
          </tr>
          <tr>
            <td height="25" align="left">&nbsp;</td>
            <td colspan="2" align="center"><table class="table_border">
              <tr>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["0"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["1"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["2"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["3"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["4"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["5"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["6"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["7"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["8"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["9"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["10"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["11"];?></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td align="left">&nbsp;</td>
            <td colspan="2" align="center" class="small">(індивідуалний податковий номер покупця)</td>
          </tr>
          <tr>
            <td height="40" align="left">Місцезнаходження (податкова адреса) покупця</td>
            <td colspan="2" align="right" valign="bottom" class="medium" style="border-bottom:1px #000 solid"><?php echo $v["p"]["company_jaddress"];?> </td>
          </tr>
          <tr>
            <td height="40" align="left">Номер телефону</td>
            <td width="45">&nbsp;</td>
            <td width="215" align="left"><table class="table_border">
              <tr>
                <td class="cell"><?php echo $v["p"]["company_phone"]["0"];?></td>
                <td class="cell"><?php echo $v["p"]["company_phone"]["1"];?></td>
                <td class="cell"><?php echo $v["p"]["company_phone"]["2"];?></td>
                <td class="cell"><?php echo $v["p"]["company_phone"]["3"];?></td>
                <td class="cell"><?php echo $v["p"]["company_phone"]["4"];?></td>
                <td class="cell"><?php echo $v["p"]["company_phone"]["5"];?></td>
                <td class="cell"><?php echo $v["p"]["company_phone"]["6"];?></td>
                <td class="cell"><?php echo $v["p"]["company_phone"]["7"];?></td>
                <td class="cell"><?php echo $v["p"]["company_phone"]["8"];?></td>
                <td class="cell"><?php echo $v["p"]["company_phone"]["9"];?></td>
              </tr>
            </table></td>
          </tr>
        </table>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td height="40" colspan="2">
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="170" align="left">Вид цивільно-правового договору</td>
              <td width="200" align="left" valign="bottom" class="medium" style="border-bottom:#000 1px solid;text-align:right">Договір поставки</td>
              <td>
                
                <table class="table_border"><tr>
                  <td style="border:none;">від</td>
                  <td class="cell"><?php echo $v["p"]["ag_date"]["0"];?></td>
                  <td class="cell"><?php echo $v["p"]["ag_date"]["1"];?></td>
                  <td class="cell"><?php echo $v["p"]["ag_date"]["2"];?></td>
                  <td class="cell"><?php echo $v["p"]["ag_date"]["3"];?></td>
                  <td class="cell"><?php echo $v["p"]["ag_date"]["4"];?></td>
                  <td class="cell"><?php echo $v["p"]["ag_date"]["5"];?></td>
                  <td class="cell"><?php echo $v["p"]["ag_date"]["6"];?></td>
                  <td class="cell"><?php echo $v["p"]["ag_date"]["7"];?></td>
                  <td style="border:none">№</td>
                  <td class="cell" style="width:195px;text-align:right"><?php echo $v["p"]["company_agreement_num"];?></td>
                  </tr></table>
                
                
                </td>
              </tr>
            <tr>
              <td align="left">&nbsp;</td>
              <td align="center" class="tiny">(вид договору)</td>
              <td align="center" class="tiny">&nbsp;</td>
              </tr>
            <tr>
              <td align="left">Форма проведених розрахунків</td>
              <td colspan="2" align="right"  style="border-bottom:#000 1px solid">Оплата з поточного рахунку</td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="2" align="center" height="20" valign="top">(бартер, готівка, оплата з поточного рахунку, чек тощо)</td>
              </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center">
    <table width="750" border="0" class="table_border">
      <tr>
        <td rowspan="3" align="center">Роз- діл</td>
        <td rowspan="3" align="center">Дата виникнення податкового зобов'язання (постачання (оплати<small><sup>2</sup></small>))</td>
        <td width="210" rowspan="3" align="center">Номенклатура <br />товарів/послуг<br /> продавця</td>
        <td rowspan="3" align="center">Код товару    згідно з УКТ ЗЕД</td>
        <td rowspan="3" align="center">Оди- ниця виміру товару/ послуги</td>
        <td rowspan="3" align="center">Кількість (об'єм, обсяг)</td>
        <td rowspan="3" align="center">Ціна    постачання одиниці товару/ послуги без урахуван- ня ПДВ</td>
        <td colspan="4" align="center">Обсяги постачання (база оподаткування) без урахування ПДВ, що підлягають оподаткуванню за ставками </td>
        <td rowspan="3" align="center">Загальна сума коштів, що підлягає сплаті</td>
      </tr>
      <tr>
        <td width="40" rowspan="2" align="center">основна ставка</td>
        <td colspan="2" align="center">нульова ставка</td>
        <td rowspan="2" align="center">звільнення від ПДВ <small><sup>3</sup></small></td>
      </tr>
      <tr>
        <td align="center">постачання на митній території України</td>
        <td align="center">експорт</td>
        </tr>
      <tr>
        <td align="center">1</td>
        <td align="center">2</td>
        <td align="center">3</td>
        <td align="center">4</td>
        <td align="center">5</td>
        <td align="center">6</td>
        <td align="center">7</td>
        <td align="center">8</td>
        <td align="center">9</td>
        <td align="center">10</td>
        <td align="center">11</td>
        <td align="center">12</td>
      </tr>
      <tr>
        <td rowspan="<?php echo $v["entries_num"]+2;?>" align="center" valign="top">I</td>
      </tr>
      <?php $counter1=-1; if( isset($v["entries"]) && is_array($v["entries"]) && sizeof($v["entries"]) ) foreach( $v["entries"] as $key1 => $value1 ){ $counter1++; ?>
      <tr>
        <td align="center" height="17"><?php echo $v["date"];?></td>
        <td align="left"><?php echo $value1["2"];?></td>
        <td align="center"><?php echo $value1["3"];?></td>
        <td align="center"><?php echo $value1["5"];?></td>
        <td align="center"><?php echo $value1["4"];?></td>
        <td align="right"><?php echo $value1["6"];?></td>
        <td align="right"><?php echo $value1["7"];?></td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <?php if( $counter1==0 ){ ?>
        <td align="right" valign="bottom" rowspan="<?php echo $v["entries_num"];?>" style="border-bottom:none"></td>
        <?php } ?>
      </tr>
      <?php } ?>
      <tr>
        <td colspan="2" align="center"><b>Усього за розділом I</b></td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="right"><?php echo $v["footer"]["vatless"];?></td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="right" style="border-top:none"><?php echo $v["footer"]["vatless"];?></td>
        </tr>
      <tr>
        <td align="center">II</td>
        <td colspan="2" align="center">Зворотна (заставна) тара</td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">III</td>
        <td colspan="2" align="center">Податок на додану вартість</td>
        <td align="center">Х</td>
        <td align="center">X</td>
        <td align="center">X</td>
        <td align="center">X</td>
        <td align="right"><?php echo $v["footer"]["vat"];?></td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="right"><?php echo $v["footer"]["vat"];?></td>
      </tr>
      <tr>
        <td align="center">IV</td>
        <td colspan="2" align="center">Загальна сума з ПДВ</td>
        <td align="center">Х</td>
        <td align="center">X</td>
        <td align="center">X</td>
        <td align="center">X</td>
        <td align="right"><?php echo $v["footer"]["total"];?></td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="right"><?php echo $v["footer"]["total"];?></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><table width="750" border="0" cellpadding="0" cellspacing="0" class="subpage">
      <tr>
        <td height="40" colspan="2" align="left" valign="top" class="small"> Суми ПДВ, нараховані (сплачені) в зв'язку з постачанням товарів/послуг, зазначених у цій накладній, визначені  правильно, відповідають сумі податкових    зобов'язань продавця і включені до реєстру виданих та отриманих податкових    накладних.</td>
        </tr>
      <tr>
        <td width="420" class="small">&nbsp;</td>
        <td width="280" align="right" valign="bottom">&nbsp;</td>
      </tr>
      <tr>
        <td height="80"><table border="0">
            <tr>
            <td width="50">&nbsp;</td>
            <td width="50" height="50" align="center" valign="middle" style="border:1px solid #000">М.П.</td>
            </tr>
        </table></td>
        <td><table width="270" border="0" align="right" cellspacing="0">
          <tr>
            <td align="center" class="medium" style="border-bottom:#000 solid 1px"><?php echo $v["extra"]->sign;?></td>
          </tr>
          <tr>
            <td align="center" class="small">(підпис, ініціали та прізвище особи, яка склала податкову накладну)</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2" align="left" class="small"><i>______________________<br />
          1 Зазначається код виду діяльності, що передбачає спеціальний режим оподаткування (2, або 3, або 4), у разі складання податкової накладної за такою діяльністю.<br />
          2 Дата оплати ставиться у разі попередньої оплати постачання, на яку виписується податкова накладна, для операцій з постачання товарів/послуг  відповідно до пункту 187.10 статті 187 розділу V Податкового кодексу України.<br />
          3 _______________________________________________________________________________________________________________________________<br />	 
 			&nbsp;&nbsp;&nbsp;(відповідні пункти (підпункти), статті, підрозділи, розділи  Податкового кодексу України, якими передбачено звільнення від оподаткування).</i></td>
        </tr>
    </table></td>
  </tr>
</table> 
</div>

<div class="page-break">&nbsp;</div>

<div class="page">
<table width="778" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="350" align="left">
        <table width="260" border="0" cellpadding="0" cellspacing="0" class="table_border">
          <tr>
		    <td rowspan="2">Паперова</td>
            <td>Оригінал (видається покупцю)</td>
            <td height="10" colspan="2" align="center"></td>
          </tr>
          <tr>
            <td>Копія (залишається у продавця)</td>
            <td height="10" colspan="2" align="center">Х</td>
          </tr>
          <tr>
            <td colspan="2">Електронна</td>
            <td height="10" colspan="2" align="center"></td>
            </tr>
		<tr>
            <td colspan="2">Підлягає реєстрації в ЄРПН</td>
            <td height="10" colspan="2" align="center"><?php if( $v["head"]["inernn"]==1 ){ ?>X<?php }else{ ?>&nbsp;<?php } ?></td>
            </tr>
          <tr>
            <td colspan="2" rowspan="2">Усі примірники залишаються у продавця <br />(тип причини)</td>
            <td height="10" colspan="2" align="center"><?php echo $v["stay_at_seller"];?></td>
            </tr>
          <tr>
            <td width="14" height="10" align="center"><?php echo substr($v["extra"]->type_of_reason,0,1); ?></td>
            <td width="14" height="10" align="center"><?php echo substr($v["extra"]->type_of_reason,1,1); ?></td>
            </tr>
        </table>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(потрібне виділити поміткою "Х")
        </td>
        <td width="350" align="right" valign="top">
        <table>
          <tr>
            <td align="left" valign="middle" class="medium">ЗАТВЕРДЖЕНО<br />
                Наказ Міністерства доходів і зборів України<br />
                14 січня 2014 року №10</td>
          </tr>
        </table>
</td>
      </tr>
      <tr>
        <td height="30" colspan="2" align="center" valign="top" class="bigest"><strong>ПОДАТКОВА НАКЛАДНА</strong></td>
        </tr>
      <tr>
        <td valign="top"><table width="350" cellpadding="0" cellspacing="0">
          <tr>
            <td class="medium">Дата складання податкової накладної</td>
            <td>
            <table class="table_border"><tr><td class="cell"><?php echo $v["date"]["0"];?></td><td class="cell"><?php echo $v["date"]["1"];?></td><td class="cell"><?php echo $v["date"]["2"];?></td><td class="cell"><?php echo $v["date"]["3"];?></td><td class="cell"><?php echo $v["date"]["4"];?></td><td class="cell"><?php echo $v["date"]["5"];?></td><td class="cell"><?php echo $v["date"]["6"];?></td><td class="cell"><?php echo $v["date"]["7"];?></td></tr></table>
            </td>
          </tr>
        </table></td>
        <td valign="top"><table width="100%" cellpadding="0" cellspacing="0" align="right">
          <tr>
            <td class="medium">Порядковий номер</td>
            <td rowspan="2" align="right">
            
            <table border="0" cellpadding="0" cellspacing="0"><tr>
            <td><table class="table_border"><tr><td class="cell"><?php echo $v["view_num_fill"]["0"];?></td><td class="cell"><?php echo $v["view_num_fill"]["1"];?></td><td class="cell"><?php echo $v["view_num_fill"]["2"];?></td><td class="cell"><?php echo $v["view_num_fill"]["3"];?></td><td class="cell"><?php echo $v["view_num_fill"]["4"];?></td><td class="cell"><?php echo $v["view_num_fill"]["5"];?></td><td class="cell"><?php echo $v["view_num_fill"]["6"];?></td></tr></table>
            </td><td class="cell">/</td>
			<td class="cell"><table class="table_border"><tr><td class="cell">&nbsp;</td></tr></table></td><td class="cell">/</td>
			<td>
            <table class="table_border"><tr><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td></tr></table>
            </td></tr>
              <tr style="margin:0px;padding:0px">
                <td>&nbsp;</td>
                <td class="cell">&nbsp;</td>
                <td align="center"><span class="tiny"><sup>(1)</sup> </span></td>
                <td align="center">&nbsp;</td>
                <td align="center">(номер філії)</td>
              </tr>
            
            
            </table>
            
            </td>
          </tr>
          <tr>
            <td class="medium">&nbsp;</td>
          </tr>
        </table></td> 
      </tr>
      <tr>
        <td valign="top"><table width="360" border="0" cellpadding="0" cellspacing="1">
          <tr>
            <td>&nbsp;</td>
            <td colspan="2"><b class="medium">Продавець</b></td>
            </tr>
          <tr>
            <td align="left">Особа (платник<br />
              податку) - продавець</td>
            <td height="50" colspan="2" align="right" class="medium" style="border:1px #000 solid"><?php echo $v["a"]["company_name"];?> &nbsp;</td>
            </tr>
          <tr>
            <td align="left">&nbsp;</td>
            <td colspan="2" align="center"><span class="small">(найменування; прізвище, ім'я, по батькові - для фізичної особи - підприємця)</span></td>
            </tr>
          <tr>
            <td height="25" align="left">&nbsp;</td>
            <td colspan="2" align="center"><table align="center" class="table_border">
              <tr>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["0"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["1"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["2"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["3"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["4"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["5"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["6"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["7"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["8"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["9"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["10"];?></td>
                <td align="center" class="cell"><?php echo $v["a"]["cvi"]["11"];?></td>
              </tr>
            </table></td>
            </tr>
          <tr>
            <td align="left">&nbsp;</td>
            <td colspan="2" align="center"><span class="small">(індивідуалний податковий номер продавця)</span></td>
            </tr>
          <tr>
            <td height="40" align="left">Місцезнаходження (податкова адреса) продавця</td>
            <td colspan="2" align="right" valign="bottom" class="medium" style="border-bottom:1px #000 solid"><?php echo $v["a"]["company_jaddress"];?> </td>
            </tr>
          <tr>
            <td height="40" align="left">Номер телефону</td>
            <td width="45">&nbsp;</td>
            <td width="215" align="left"><table class="table_border">
              <tr>
                <td class="cell"><?php echo $v["a"]["company_phone"]["0"];?></td>
                <td class="cell"><?php echo $v["a"]["company_phone"]["1"];?></td>
                <td class="cell"><?php echo $v["a"]["company_phone"]["2"];?></td>
                <td class="cell"><?php echo $v["a"]["company_phone"]["3"];?></td>
                <td class="cell"><?php echo $v["a"]["company_phone"]["4"];?></td>
                <td class="cell"><?php echo $v["a"]["company_phone"]["5"];?></td>
                <td class="cell"><?php echo $v["a"]["company_phone"]["6"];?></td>
                <td class="cell"><?php echo $v["a"]["company_phone"]["7"];?></td>
                <td class="cell"><?php echo $v["a"]["company_phone"]["8"];?></td>
                <td class="cell"><?php echo $v["a"]["company_phone"]["9"];?></td>
              </tr>
            </table></td>
            </tr>
        </table>
          <p>&nbsp;</p></td>
        <td align="right" valign="top"><table width="360" border="0" cellspacing="1" cellpadding="0">
          <tr>
            <td>&nbsp;</td>
            <td colspan="2"><b class="medium">Покупець</b></td>
          </tr>
          <tr>
            <td align="left">Особа (платник<br />
              податку) - покупець</td>
            <td height="50" colspan="2" align="right" class="medium" style="border:1px #000 solid"><?php echo $v["p"]["company_name"];?> &nbsp;</td>
          </tr>
          <tr>
            <td align="left">&nbsp;</td>
            <td colspan="2" align="center"><span class="small">(найменування; прізвище, ім'я, по батькові - для фізичної особи - підприємця)</span></td>
          </tr>
          <tr>
            <td height="25" align="left">&nbsp;</td>
            <td colspan="2" align="center"><table class="table_border">
              <tr>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["0"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["1"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["2"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["3"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["4"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["5"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["6"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["7"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["8"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["9"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["10"];?></td>
                <td align="center" class="cell"><?php echo $v["p"]["cvi"]["11"];?></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td align="left">&nbsp;</td>
            <td colspan="2" align="center" class="small">(індивідуалний податковий номер покупця)</td>
          </tr>
          <tr>
            <td height="40" align="left">Місцезнаходження (податкова адреса) покупця</td>
            <td colspan="2" align="right" valign="bottom" class="medium" style="border-bottom:1px #000 solid"><?php echo $v["p"]["company_jaddress"];?> </td>
          </tr>
          <tr>
            <td height="40" align="left">Номер телефону</td>
            <td width="45">&nbsp;</td>
            <td width="215" align="left"><table class="table_border">
              <tr>
                <td class="cell"><?php echo $v["p"]["company_phone"]["0"];?></td>
                <td class="cell"><?php echo $v["p"]["company_phone"]["1"];?></td>
                <td class="cell"><?php echo $v["p"]["company_phone"]["2"];?></td>
                <td class="cell"><?php echo $v["p"]["company_phone"]["3"];?></td>
                <td class="cell"><?php echo $v["p"]["company_phone"]["4"];?></td>
                <td class="cell"><?php echo $v["p"]["company_phone"]["5"];?></td>
                <td class="cell"><?php echo $v["p"]["company_phone"]["6"];?></td>
                <td class="cell"><?php echo $v["p"]["company_phone"]["7"];?></td>
                <td class="cell"><?php echo $v["p"]["company_phone"]["8"];?></td>
                <td class="cell"><?php echo $v["p"]["company_phone"]["9"];?></td>
              </tr>
            </table></td>
          </tr>
        </table>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td height="40" colspan="2">
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="170" align="left">Вид цивільно-правового договору</td>
              <td width="200" align="left" valign="bottom" class="medium" style="border-bottom:#000 1px solid;text-align:right">Договір поставки</td>
              <td>
                
                <table class="table_border"><tr>
                  <td style="border:none;">від</td>
                  <td class="cell"><?php echo $v["p"]["ag_date"]["0"];?></td>
                  <td class="cell"><?php echo $v["p"]["ag_date"]["1"];?></td>
                  <td class="cell"><?php echo $v["p"]["ag_date"]["2"];?></td>
                  <td class="cell"><?php echo $v["p"]["ag_date"]["3"];?></td>
                  <td class="cell"><?php echo $v["p"]["ag_date"]["4"];?></td>
                  <td class="cell"><?php echo $v["p"]["ag_date"]["5"];?></td>
                  <td class="cell"><?php echo $v["p"]["ag_date"]["6"];?></td>
                  <td class="cell"><?php echo $v["p"]["ag_date"]["7"];?></td>
                  <td style="border:none">№</td>
                  <td class="cell" style="width:195px;text-align:right"><?php echo $v["p"]["company_agreement_num"];?></td>
                  </tr></table>
                
                
                </td>
              </tr>
            <tr>
              <td align="left">&nbsp;</td>
              <td align="center" class="tiny">(вид договору)</td>
              <td align="center" class="tiny">&nbsp;</td>
              </tr>
            <tr>
              <td align="left">Форма проведених розрахунків</td>
              <td colspan="2" align="right"  style="border-bottom:#000 1px solid">Оплата з поточного рахунку</td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td colspan="2" align="center" height="20" valign="top">(бартер, готівка, оплата з поточного рахунку, чек тощо)</td>
              </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center">
    <table width="750" border="0" class="table_border">
      <tr>
        <td rowspan="3" align="center">Роз- діл</td>
        <td rowspan="3" align="center">Дата виникнення податкового зобов'язання (постачання (оплати<small><sup>2</sup></small>))</td>
        <td width="210" rowspan="3" align="center">Номенклатура <br />товарів/послуг<br /> продавця</td>
        <td rowspan="3" align="center">Код товару    згідно з УКТ ЗЕД</td>
        <td rowspan="3" align="center">Оди- ниця виміру товару/ послуги</td>
        <td rowspan="3" align="center">Кількість (об'єм, обсяг)</td>
        <td rowspan="3" align="center">Ціна    постачання одиниці товару/ послуги без урахуван- ня ПДВ</td>
        <td colspan="4" align="center">Обсяги постачання (база оподаткування) без урахування ПДВ, що підлягають оподаткуванню за ставками </td>
        <td rowspan="3" align="center">Загальна сума коштів, що підлягає сплаті</td>
      </tr>
      <tr>
        <td width="40" rowspan="2" align="center">основна ставка</td>
        <td colspan="2" align="center">нульова ставка</td>
        <td rowspan="2" align="center">звільнення від ПДВ <small><sup>3</sup></small></td>
      </tr>
      <tr>
        <td align="center">постачання на митній території України</td>
        <td align="center">експорт</td>
        </tr>
      <tr>
        <td align="center">1</td>
        <td align="center">2</td>
        <td align="center">3</td>
        <td align="center">4</td>
        <td align="center">5</td>
        <td align="center">6</td>
        <td align="center">7</td>
        <td align="center">8</td>
        <td align="center">9</td>
        <td align="center">10</td>
        <td align="center">11</td>
        <td align="center">12</td>
      </tr>
      <tr>
        <td rowspan="<?php echo $v["entries_num"]+2;?>" align="center" valign="top">I</td>
      </tr>
      <?php $counter1=-1; if( isset($v["entries"]) && is_array($v["entries"]) && sizeof($v["entries"]) ) foreach( $v["entries"] as $key1 => $value1 ){ $counter1++; ?>
      <tr>
        <td align="center" height="17"><?php echo $v["date"];?></td>
        <td align="left"><?php echo $value1["2"];?></td>
        <td align="center"><?php echo $value1["3"];?></td>
        <td align="center"><?php echo $value1["5"];?></td>
        <td align="center"><?php echo $value1["4"];?></td>
        <td align="right"><?php echo $value1["6"];?></td>
        <td align="right"><?php echo $value1["7"];?></td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <?php if( $counter1==0 ){ ?>
        <td align="right" valign="bottom" rowspan="<?php echo $v["entries_num"];?>" style="border-bottom:none"></td>
        <?php } ?>
      </tr>
      <?php } ?>
      <tr>
        <td colspan="2" align="center"><b>Усього за розділом I</b></td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="right"><?php echo $v["footer"]["vatless"];?></td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="right" style="border-top:none"><?php echo $v["footer"]["vatless"];?></td>
        </tr>
      <tr>
        <td align="center">II</td>
        <td colspan="2" align="center">Зворотна (заставна) тара</td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="center">Х</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">III</td>
        <td colspan="2" align="center">Податок на додану вартість</td>
        <td align="center">Х</td>
        <td align="center">X</td>
        <td align="center">X</td>
        <td align="center">X</td>
        <td align="right"><?php echo $v["footer"]["vat"];?></td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="right"><?php echo $v["footer"]["vat"];?></td>
      </tr>
      <tr>
        <td align="center">IV</td>
        <td colspan="2" align="center">Загальна сума з ПДВ</td>
        <td align="center">Х</td>
        <td align="center">X</td>
        <td align="center">X</td>
        <td align="center">X</td>
        <td align="right"><?php echo $v["footer"]["total"];?></td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td align="right"><?php echo $v["footer"]["total"];?></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><table width="750" border="0" cellpadding="0" cellspacing="0" class="subpage">
      <tr>
        <td height="40" colspan="2" align="left" valign="top" class="small"> Суми ПДВ, нараховані (сплачені) в зв'язку з постачанням товарів/послуг, зазначених у цій накладній, визначені  правильно, відповідають сумі податкових    зобов'язань продавця і включені до реєстру виданих та отриманих податкових    накладних.</td>
        </tr>
      <tr>
        <td width="420" class="small">&nbsp;</td>
        <td width="280" align="right" valign="bottom">&nbsp;</td>
      </tr>
      <tr>
        <td height="80"><table border="0">
            <tr>
            <td width="50">&nbsp;</td>
            <td width="50" height="50" align="center" valign="middle" style="border:1px solid #000">М.П.</td>
            </tr>
        </table></td>
        <td><table width="270" border="0" align="right" cellspacing="0">
          <tr>
            <td align="center" class="medium" style="border-bottom:#000 solid 1px"><?php echo $v["extra"]->sign;?></td>
          </tr>
          <tr>
            <td align="center" class="small">(підпис, ініціали та прізвище особи, яка склала податкову накладну)</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2" align="left" class="small"><i>______________________<br />
          1 Зазначається код виду діяльності, що передбачає спеціальний режим оподаткування (2, або 3, або 4), у разі складання податкової накладної за такою діяльністю.<br />
          2 Дата оплати ставиться у разі попередньої оплати постачання, на яку виписується податкова накладна, для операцій з постачання товарів/послуг  відповідно до пункту 187.10 статті 187 розділу V Податкового кодексу України.<br />
          3 _______________________________________________________________________________________________________________________________<br />	 
 			&nbsp;&nbsp;&nbsp;(відповідні пункти (підпункти), статті, підрозділи, розділи  Податкового кодексу України, якими передбачено звільнення від оподаткування).</i></td>
        </tr>
    </table></td>
  </tr>
</table> 
</div>
