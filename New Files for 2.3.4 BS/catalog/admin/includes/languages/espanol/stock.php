<?php
/*
      QT Pro Version 4.0
  
      stock.php language file
  
      Contribution extension to:
        osCommerce, Open Source E-Commerce Solutions
        http://www.oscommerce.com
     
      Copyright (c) 2004 Ralph Day
      Released under the GNU General Public License
  
      Based on prior works released under the GNU General Public License:
        QT Pro prior versions
          Ralph Day, October 2004
          Tom Wojcik aka TomThumb 2004/07/03 based on work by Michael Coffman aka coffman
          FREEZEHELL - 08/11/2003 freezehell@hotmail.com Copyright (c) 2003 IBWO
          Joseph Shain, January 2003
        osCommerce MS2
          Copyright (c) 2003 osCommerce
          
      Modifications made:
        11/2004 - none in this version
  
*******************************************************************************************
  
  
*/
define('HEADING_TITLE','Stock de productos');

define('TABLE_HEADING_QUANTITY','Cantidad');
define('TABLE_HEADING_QTPO_DOCTOR','QTPro Doctor');
define('TABLE_HEADING_LINKS','Links');
define('TEXT_LINK_EDIT_PRODUCT','Editar producto');
define('TEXT_LINK_LOW_STOCK_REPORT','Ir al informe de stock');
define('TEXT_LINK_GO_TO_PRODUCT','Ir a este producto en: ');
define('WARNING_NO_PRODUCT','Atención! Este producto no parece existir en ninguna categoría. Sus clientes no lo encontrarán.');
 
define('BUTTON_ADD','Añadir');
define('BUTTON_UPDATE','Actualizar');

// detailed product inverstigation used in qtpro_doctor_formulate_product_investigation function
define('TEXT_DETAILED_STOCK_MATCH_TRUE','<span style="color:green; font-weight: bold; font-size:1.2em;">El resumen de cantidad de existencias está bien</span><br>
				Esto significa que el resumen actual de esta cantidad de productos, que se encuentra en la base de datos, es el valor que obtenemos si lo calculamos desde cero en este momento.<br>
				<b>El resumen de stock es %s </b><br><br>');
define('TEXT_DETAILED_STOCK_MATCH_FALSE','<span style="color:red; font-weight: bold; font-size:1.2em;">El resumen de cantidad de existencias no está bien</span><br>
				Esto significa que el resumen actual de esta cantidad de productos, que está en la base de datos, no es el valor que obtendremos si lo calculamos desde cero ahora mismo.<br>
				<b>El resumen de stock es: %s </b><br>
				<b>Si lo calculamos obtenemos: %s </b><br><br>');
define('TEXT_DETAILED_STOCK_ENTRIES_HEALTHY','<span style="color:green; font-weight: bold; font-size:1.2em;">El stock de opciones está bien</span><br>
				Esto significa que las entradas de la base de datos para este producto están como deberían. No hay opciones faltantes en ninguna fila. No existe ninguna opción en ninguna fila donde no debería.<br>
				<b>El número total de entradas de stock de este producto es: %s </b><br>
				<b>Número de entradas desordenadas: %s </b><br>');
define('TEXT_DETAILED_STOCK_ENTRIES_NOT_HEALTHY','<span style="color:red; font-weight: bold; font-size:1.2em;">El stock de opciones NO está bien</span><br>
				Esto significa que al menos una de las entradas de la base de datos de este producto está desordenada. Faltan opciones en las filas o hay opciones en filas que no deberían.<br>
				<b>Número total de entradas de stock de este producto: &s </b><br>
				<b>Número de entradas desordenadas: %s</b><br><br>');
define('TEXT_DETAILED_STOCK_SOLUTIONS_STOP_TRACKING','<span style="color:blue; font-weight: bold;">Posible solución: </span>Elimine la/s fila/s correspondiente/s de la base de datos o deje de rastrear el stock para esa opción.<br><br>');
define('TEXT_DETAILED_STOCK_OPTIONS_SHOULD_NOT_EXIST','<br><b>Estas opciones existen en fila/s aunque no deberían:</b><br>');
define('TEXT_DETAILED_STOCK_SOLUTIONS_START_TRACKING','<span style="color:blue; font-weight: bold;">Posible solución: </span>Elimine la/s fila/s correspondiente/s de la base de datos o comience a rastrear el stock para esa opción.<br><br>');
define('TEXT_DETAILED_STOCK_LINK_AMPUTATION','Amputación (Elimina todas las filas desordenadas)');
define('TEXT_DETAILED_STOCK_LINK_SET_SUMMARY','Establecer el stock de resumen a: %s');
