<?php if(!class_exists('raintpl')){exit;}?><style type="text/css">
    table { border-collapse:collapse; page-break-after:always;font-family:Calibri, Arial, Helvetica, sans-serif; font-size:10px; background-color:white }
    .gridlines td { border:1px dotted black }
    .b { text-align:center }
    .e { text-align:center }
    .f { text-align:right }
    .inlineStr { text-align:left }
    .n { text-align:right }
    .s { text-align:left }
    .style0 { vertical-align:bottom; border-bottom:none; border-top:none; border-left:none; border-right:none; font-family:'Calibri'; font-size:11pt; background-color:white }
    td.style1 { vertical-align:bottom; text-align:center; border-bottom:none; border-top:none; border-left:none; border-right:none; font-weight:bold; background-color:white }
    .style2 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style3 { vertical-align:middle; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style4 { vertical-align:top; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style5 { vertical-align:bottom; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style6 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style7 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style8 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style9{ vertical-align:bottom; text-align:center; border-bottom:none; border-top:1px solid black !important; border-left:none; border-right:none; background-color:white }
    td.style10 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style11 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style12 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none; border-top:none; border-left:none; border-right:1px solid black !important; background-color:white }
    td.style13 { vertical-align:middle; text-align:center; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style14 { vertical-align:middle; text-align:center; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style15 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none; border-top:none; border-left:none; border-right:1px solid black !important; background-color:white }
    td.style16 { vertical-align:middle; text-align:center; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style17 { vertical-align:middle; text-align:center; border-bottom:none; border-top:1px solid black !important; border-left:1px solid black !important; border-right:none; background-color:white }
    td.style18 { vertical-align:middle; text-align:center; border-bottom:none; border-top:1px solid black !important; border-left:none; border-right:none; background-color:white }
    td.style19 { vertical-align:middle; text-align:center; border-bottom:none; border-top:1px solid black !important; border-left:none; border-right:1px solid black !important; background-color:white }
    td.style20 { vertical-align:top; text-align:center; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style21 { vertical-align:middle; text-align:center; border-bottom:1px solid black !important; border-top:none; border-left:1px solid black !important; border-right:none; background-color:white }
    td.style22 { vertical-align:middle; text-align:center; border-bottom:1px solid black !important; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style23 { vertical-align:middle; text-align:center; border-bottom:1px solid black !important; border-top:none; border-left:none; border-right:1px solid black !important; background-color:white }
    td.style24 { vertical-align:middle; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style25 { vertical-align:middle; text-align:center; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style26 { vertical-align:bottom; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style27 { vertical-align:bottom; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style28 { vertical-align:bottom; text-align:center; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style29 { vertical-align:bottom; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style30 { vertical-align:middle; text-align:center; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style31 { vertical-align:middle; text-align:center; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:none; background-color:white }
    td.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:none; border-right:none; background-color:white }
    td.style33 { vertical-align:middle; text-align:center; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:none; border-right:1px solid black !important; background-color:white }
    td.style32{ vertical-align:top; text-align:center; border-bottom:none; border-top:1px solid black !important; border-left:none; border-right:none; background-color:white }
    td.style36 { vertical-align:bottom; text-align:center; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style37 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style38 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style39 { vertical-align:bottom; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style40 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style41{ vertical-align:bottom; text-align:center; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style42 { vertical-align:bottom; text-align:center; border-bottom:none; border-top:none; border-left:none; border-right:1px solid black !important; background-color:white }
    td.style43 { vertical-align:bottom; text-align:center; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style44 { vertical-align:bottom; border-bottom:2px solid black !important; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style45 { vertical-align:bottom; text-align:center; border-bottom:2px solid black !important; border-top:1px solid black !important; border-left:none; border-right:none; background-color:white }
    td.style46 { vertical-align:top; text-align:center; border-bottom:1px solid black !important; border-top:2px solid black !important; border-left:2px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style47 { vertical-align:top; text-align:center; border-bottom:1px solid black !important; border-top:2px solid black !important; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style48 { vertical-align:top; text-align:center; border-bottom:none; border-top:2px solid black !important; border-left:1px solid black !important; border-right:none; background-color:white }
    td.style49 { vertical-align:top; text-align:center; border-bottom:none; border-top:2px solid black !important; border-left:none; border-right:none; background-color:white }
    td.style50 { vertical-align:top; text-align:center; border-bottom:1px solid black !important; border-top:2px solid black !important; border-left:1px solid black !important; border-right:2px solid black !important; background-color:white }
    td.style51 { vertical-align:top; text-align:center; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:2px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style52 { vertical-align:top; text-align:center; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style53 { vertical-align:top; text-align:center; border-bottom:none; border-top:none; border-left:1px solid black !important; border-right:none; background-color:white }
    td.style54 { vertical-align:top; text-align:center; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:2px solid black !important; background-color:white }
    td.style55 { vertical-align:top; text-align:center; border-bottom:none; border-top:1px solid black !important; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style56 { vertical-align:top; text-align:center; border-bottom:none; border-top:none; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style57 { vertical-align:top; text-align:center; border-bottom:2px solid black !important; border-top:1px solid black !important; border-left:2px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style58 { vertical-align:top; text-align:center; border-bottom:2px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style59 { vertical-align:top; text-align:center; border-bottom:2px solid black !important; border-top:none; border-left:1px solid black !important; border-right:none; background-color:white }
    td.style60 { vertical-align:top; text-align:center; border-bottom:2px solid black !important; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style61 { vertical-align:top; text-align:center; border-bottom:2px solid black !important; border-top:none; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style62 { vertical-align:top; text-align:center; border-bottom:2px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:2px solid black !important; background-color:white }
    td.style63 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:none; border-left:2px solid black !important; border-right:1px solid black !important; font-weight:bold; background-color:white }
    td.style64 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:none; border-left:1px solid black !important; border-right:1px solid black !important; font-weight:bold; background-color:white }
    td.style65 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:none; border-left:1px solid black !important; border-right:none; font-weight:bold; background-color:white }
    td.style66 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:none; border-left:none; border-right:none; font-weight:bold; background-color:white }
    td.style67 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:none; border-left:1px solid black !important; border-right:1px solid black !important; font-weight:bold; background-color:white }
    td.style68 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:none; border-left:1px solid black !important; border-right:1px solid black !important; font-weight:bold; background-color:white }
    td.style69 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:none; border-left:1px solid black !important; border-right:2px solid black !important; font-weight:bold; background-color:white }
    td.style70 { vertical-align:top; text-align:center; border-bottom:none; border-top:none; border-left:2px solid black !important; border-right:1px solid black !important; font-weight:bold; background-color:white }
    td.style71 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:none; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style72 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:none; background-color:white }
    td.style73 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:none; border-right:none; background-color:white }
    td.style74 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:none; border-right:1px solid black !important; background-color:white }
    td.style75 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:none; border-left:1px solid black !important; border-right:none; background-color:white }
    td.style76 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:none; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style77 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:1px solid black !important; border-top:none; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style78 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:1px solid black !important; border-top:none; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style79 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:1px solid black !important; border-top:none; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style80 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:1px solid black !important; border-top:none; border-left:1px solid black !important; border-right:2px solid black !important; background-color:white }
    td.style81 { vertical-align:top; text-align:center; border-bottom:1px solid black !important; border-top:none; border-left:2px solid black !important; border-right:1px solid black !important; font-weight:bold; background-color:white }
    td.style82 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:none; background-color:white }
    td.style83 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:none; border-right:none; background-color:white }
    td.style84 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:none; border-right:1px solid black !important; background-color:white }
    td.style85 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:none; background-color:white }
    td.style86 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:none; border-right:1px solid black !important; background-color:white }
    td.style87 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:none; border-right:2px solid black !important; background-color:white }
    td.style88 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:2px solid black !important; border-right:1px solid black !important; font-weight:bold; background-color:white }
    td.style89 { vertical-align:bottom; text-align:center; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:2px solid black !important; background-color:white }
    td.style90 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style91 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:1px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:2px solid black !important; background-color:white }
    td.style92 { vertical-align:bottom; text-align:center; border-bottom:2px solid black !important; border-top:1px solid black !important; border-left:2px solid black !important; border-right:1px solid black !important; font-weight:bold; background-color:white }
    td.style93 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:2px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:none; background-color:white }
    td.style94 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:2px solid black !important; border-top:1px solid black !important; border-left:none; border-right:none; background-color:white }
    td.style95 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:2px solid black !important; border-top:1px solid black !important; border-left:none; border-right:1px solid black !important; background-color:white }
    td.style96 { vertical-align:bottom; text-align:center; border-bottom:2px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:none; background-color:white }
    td.style97 { vertical-align:bottom; text-align:center; border-bottom:2px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style98 { vertical-align:bottom; text-align:center; border-bottom:2px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style99 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:2px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:1px solid black !important; background-color:white }
    td.style100 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:2px solid black !important; border-top:1px solid black !important; border-left:1px solid black !important; border-right:2px solid black !important; background-color:white }
    td.style101 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style102 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style103 { vertical-align:bottom; border-bottom:1px solid black !important; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style104 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none; border-top:none; border-left:none; border-right:none; background-color:white }
    td.style105 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid black !important; border-top:none; border-left:none; border-right:none; background-color:white }
    table tr { height:11.25pt }
    table tr.row0 { height:23.25pt }
    table tr.row11 { height:18.75pt }
    table tr.row18 { height:21pt }




    table .row37 td{width:12pt}
    td{	padding:1px; }
</style>
<div class="page">
    <table cellpadding="0" cellspacing="0">

	<tbody>
	    <tr class="row0">
		<td class="style2" colspan="13">Складається оператором інвестору за багатосторонньою угодою про розподіл продукції </td>
		<td class="style3"></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td>&nbsp;</td>
		<td class="style6 style6" colspan="11" rowspan="4">ЗАТВЕРДЖЕНО <br />
		    Наказ Міністерства фінансів України <br />
		    22 вересня 2014 року N 957 <br />
		    (у редакції наказу Міністерства фінансів України <br />
		    від 14 листопада 2014 року N 1129)</td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row1">
		<td class="style2" colspan="13" rowspan="2">Усі примірники залишаються у продавця (тип причини) </td>
		<td class="style7 "><?php echo $v["stay_at_seller"];?></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row2">
		<td class="style8"> <?php echo $v["extra"]->type_of_reason;?></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row3">
		<td class="style9" colspan="13">(потрібне виділити поміткою &quot;Х&quot;) </td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td class="style4"></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row4">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row5">
		<td class="style10" colspan="11">Дата складання податкової накладної </td>
		<td class="style11" colspan="5"><?php echo $v["date_dot"];?></td>
		<td>&nbsp;</td>
		<td class="style10 " colspan="5" style="border:none;">Порядковий номер</td>
		<td class="style11" colspan="4"> <?php echo $v["view_num"];?></td>
		<td class="style13">/</td>
		<td class="style14"></td>
		<td class="style13">/</td>
		<td class="style11" colspan="3"></td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row6">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row7">
		<td class="style15" colspan="5" rowspan="2">Особа (платник <br />
		    податку) - продавець</td>
		<td class="style16" colspan="11" rowspan="2"><?php echo $v["a"]["company_name"];?></td>
		<td>&nbsp;</td>
		<td class="style6" colspan="5" rowspan="2">Особа (платник <br />
		    податку) - покупець</td>
		<td class="style16" colspan="10" rowspan="2"><?php echo $v["p"]["company_name"];?></td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row8">
		<td></td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row9">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td class="style24"></td>
		<td class="style25" colspan="11" rowspan="2">(найменування; прізвище, ім'я, по батькові - для фізичної особи- підприємця)</td>
		<td style="border-top:1px solid white"></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td class="style28" colspan="10" rowspan="2">(найменування; прізвище, ім'я, по батькові -для фізичної особи- підприємця)</td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row10">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td class="style24"></td>
		<td class="style26"></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td class="style27"></td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row11">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td class="style29"></td>
		<td class="style30" colspan="11"> <?php echo $v["a"]["company_vat_id"];?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td class="style29"></td>
		<td class="style29"></td>
		<td class="style30" colspan="10"> <?php echo $v["p"]["company_vat_id"];?></td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row12">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td class="style34" colspan="11">(індивідуальний податковий номер продавця)</td>
		<td class="style35"></td>
		<td class="style35"></td>
		<td class="style35"></td>
		<td class="style35"></td>
		<td class="style35"></td>
		<td class="style35"></td>
		<td class="style34" colspan="10">(індивідуальний податковий номер покупця)</td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row13">
		<td class="style6" colspan="6" rowspan="2">Місцезнаходження (податкова адреса) продавця </td>
		<td class="style37" colspan="10" rowspan="2"><?php echo $v["a"]["company_jaddress"];?></td>
		<td>&nbsp;</td>
		<td class="style6" colspan="5" rowspan="2">Місцезнаходження (податкова адреса) покупця </td>
		<td class="style37" colspan="10" rowspan="2"><?php echo $v["p"]["company_jaddress"];?></td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row14">
		<td class="style35"></td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row15">
		<td class="style38" colspan="6" rowspan="2">Вид цивільно-правового договору </td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row16">
		<td class="style40" colspan="14"><?php echo $v["agreement_type"];?></td>
		<td class="style42" colspan="2">від</td>
		<td class="style11" colspan="5"><?php echo $v["p"]["ag_date_dot"];?></td>
		<td class="style5">№</td>
		<td class="style11" colspan="4"><?php echo $v["p"]["company_agreement_num"];?></td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row17">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td class="style43" colspan="14">(вид договору)</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row18">
		<td class="style6" colspan="6">Форма проведених <br />
		    розрахунків </td>
		<td class="style40" colspan="14"><?php echo $v["payment_type"];?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row19">
		<td class="style44"></td>
		<td class="style44"></td>
		<td class="style44"></td>
		<td class="style44"></td>
		<td class="style44"></td>
		<td class="style44"></td>
		<td class="style45" colspan="14">(бартер, готівка, оплата з поточного рахунка, чек тощо)</td>
		<td class="style44"></td>
		<td class="style44"></td>
		<td class="style44"></td>
		<td class="style44"></td>
		<td class="style44"></td>
		<td class="style44"></td>
		<td class="style44"></td>
		<td class="style44"></td>
		<td class="style44"></td>
		<td class="style44"></td>
		<td class="style44"></td>
		<td class="style44"></td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row20">
		<td class="style57" rowspan="4">Роз- діл </td>
		<td class="style58" colspan="3" rowspan="4">Дата виникнення податкового зобов'язання (постачання (оплати 2)) </td>
		<td class="style58" colspan="8" rowspan="4">Номенклатура товарів/послуг продавця</td>
		<td class="style60" colspan="2" rowspan="4">Код товару згідно з УКТ ЗЕД </td>
		<td class="style52" colspan="2" rowspan="2">Оди ниця виміру товару/ послуги</td>
		<td class="style58" colspan="2" rowspan="4">Кількість (об'єм, обсяг)</td>
		<td class="style58" colspan="2" rowspan="4">Ціна постачан ня одиниці товару/ послуги без урахуван ня ПДВ </td>
		<td class="style47" colspan="10">Обсяги постачання (база оподаткування) без урахування ПДВ, що підлягають оподаткуванню за ставками </td>
		<td class="style62" colspan="2" rowspan="4">Загальна сума коштів, що підлягає сплаті</td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row21">
		<td class="style58" colspan="2" rowspan="3">основна ставка </td>
		<td class="style58" colspan="2" rowspan="3">ставка 7 %</td>
		<td class="style52" colspan="4">нульова ставка </td>
		<td class="style58" colspan="2" rowspan="3">звільнен ня від ПДВ³ </td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row22">
		<td class="style61" rowspan="2">Умовне позна чення (україн ське)</td>
		<td class="style61" rowspan="2">Код </td>
		<td class="style58" colspan="2" rowspan="2">постачан ня на митній території України </td>
		<td class="style52 style58" colspan="2" rowspan="2">експорт</td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row23">
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row24">
		<td class="style63">1</td>
		<td class="style64" colspan="3">2</td>
		<td class="style64" style="width:150px" colspan="8">3</td>
		<td class="style66" colspan="2">4</td>
		<td class="style67 n">5.1</td>
		<td class="style68 n">5.2</td>
		<td class="style64" colspan="2">6</td>
		<td class="style64" colspan="2">7</td>
		<td class="style64" colspan="2">8</td>
		<td class="style64" colspan="2">9</td>
		<td class="style64" colspan="2">10</td>
		<td class="style64" colspan="2">11</td>
		<td class="style64" colspan="2">12</td>
		<td class="style69" colspan="2">13</td>
		<td>&nbsp;</td>
	    </tr>
	    <?php $counter1=-1; if( isset($v["entries"]) && is_array($v["entries"]) && sizeof($v["entries"]) ) foreach( $v["entries"] as $key1 => $value1 ){ $counter1++; ?>
	    <tr class="row25">
		<?php if( $counter1==0 ){ ?>
		<td class="style70 style81" rowspan="<?php echo $v["entries_num"]+1;?>">I</td>
		<?php } ?>
		<td class="style71" colspan="3"><?php echo $v["date_dot"];?></td>
		<td class="style74" colspan="8"><?php echo $value1["product_name"];?></td>
		<td class="style40" colspan="2"> <?php echo $value1["product_uktzet"];?></td>
		<td class="style76"><?php echo $value1["product_unit"];?></td>
		<td class="style76 n"> <?php echo $value1["product_unit_code"];?></td>
		<td class="style71" colspan="2"><?php echo $value1["product_quantity"];?></td>
		<td class="style77" colspan="2"><?php echo $value1["product_price"];?></td>
		<td class="style78" colspan="2"><?php echo $value1["product_sum"];?></td>
		<td class="style79" colspan="2"></td>
		<td class="style79" colspan="2"></td>
		<td class="style79" colspan="2"></td>
		<td class="style79" colspan="2"></td>
		<?php if( $counter1==0 ){ ?>
		<td class="style80" colspan="2" rowspan="<?php echo $v["entries_num"]+1;?>"><?php echo $v["footer"]["vatless"];?></td>
		<?php } ?>
		<td>&nbsp;</td>
	    </tr>
	    <?php } ?>
	    <tr class="row28">
		<td class="style84" colspan="11">Усього за розділом I </td>
		<td class="style83" colspan="2">x</td>
		<td class="style7">x</td>
		<td class="style7">x</td>
		<td class="style11" colspan="2">x</td>
		<td class="style11" colspan="2">x</td>
		<td class="style85 style86" colspan="2"><?php echo $v["footer"]["vatless"];?></td>
		<td class="style11" colspan="2"></td>
		<td class="style11" colspan="2"></td>
		<td class="style11" colspan="2"></td>
		<td class="style11" colspan="2"></td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row29">
		<td class="style88">II</td>
		<td class="style74" colspan="11">Зворотна (заставна) тара </td>
		<td class="style83" colspan="2">x</td>
		<td class="style7">x</td>
		<td class="style7">x</td>
		<td class="style11" colspan="2">x</td>
		<td class="style11" colspan="2">x</td>
		<td class="style11" colspan="2">x</td>
		<td class="style11" colspan="2">x</td>
		<td class="style11" colspan="2">x</td>
		<td class="style11" colspan="2">x</td>
		<td class="style11" colspan="2">x</td>
		<td class="style89" colspan="2"></td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row30">
		<td class="style88">III</td>
		<td class="style74" colspan="11">Податок на додану вартість </td>
		<td class="style83" colspan="2">x</td>
		<td class="style7">x</td>
		<td class="style7">x</td>
		<td class="style11" colspan="2">x</td>
		<td class="style11" colspan="2">x</td>
		<td class="style90 style90" colspan="2"><?php echo $v["footer"]["vat"];?></td>
		<td class="style11" colspan="2"></td>
		<td class="style11" colspan="2"></td>
		<td class="style11" colspan="2"></td>
		<td class="style11" colspan="2">x</td>
		<td class="style90 style91" colspan="2"><span class="style90 style90"><?php echo $v["footer"]["vat"];?></span></td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row31">
		<td class="style92">IV</td>
		<td class="style95" colspan="11">Загальна сума з ПДВ</td>
		<td class="style45" colspan="2">x</td>
		<td class="style97">x</td>
		<td class="style97">x</td>
		<td class="style98" colspan="2">x</td>
		<td class="style98" colspan="2">x</td>
		<td class="style99" colspan="2"><?php echo $v["footer"]["total"];?></td>
		<td class="style98" colspan="2"></td>
		<td class="style98" colspan="2"></td>
		<td class="style98" colspan="2"></td>
		<td class="style98" colspan="2"></td>
		<td class="style100" colspan="2"><?php echo $v["footer"]["total"];?></td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row32">
		<td class="style38" colspan="32" rowspan="2">Суми ПДВ, нараховані (сплачені) у зв'язку з постачанням товарів/послуг, зазначених у цій накладній, визначені правильно, відповідають сумі податкових зобов'язань продавця і включені до реєстру виданих та отриманих податкових накладних. </td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row33">
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row34">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row35">
		<td class="style30" colspan="3" rowspan="2">М.П.</td>
		<td></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td class="style40" colspan="16">&nbsp;Р.Е. Байчиков</td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row36">
		<td></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td class="style43" colspan="16">(підпис, ініціали та прізвище особи, яка склала податкову накладну) </td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row37">
		<td class="style103"></td>
		<td class="style103"></td>
		<td class="style103"></td>
		<td style="border-top:1px solid white"></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row38">
		<td class="style104" colspan="32" rowspan="2">¹ Зазначається код виду діяльності, що передбачає спеціальний режим оподаткування (2, або 3, або 4), у разі складання податкової накладної за такою діяльністю. </td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row39">
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row40">
		<td class="style104" colspan="32" rowspan="2">² Дата оплати ставиться у разі попередньої оплати постачання, на яку виписується податкова накладна, для операцій з постачаннятоварів/послуг відповідно до пункту 187.10 статті 187 розділу V Податкового кодексу України.</td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row41">
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row42">
		<td class="style105" colspan="32">³</td>
		<td>&nbsp;</td>
	    </tr>
	    <tr class="row43">
		<td class="style34" colspan="32">(відповідні пункти (підпункти), статті, підрозділи, розділи Податкового кодексу України, якими передбачено звільнення від оподаткування) </td>
		<td>&nbsp;</td>
	    </tr>
	</tbody>
    </table>
</div>