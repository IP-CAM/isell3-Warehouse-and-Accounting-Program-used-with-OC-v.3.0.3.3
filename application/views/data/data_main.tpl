<script type="text/javascript">
	dojo.require('dijit.layout.TabContainer');
	//dojo.require("baycik.datatable.DataTable");
	dojo.require("dijit.layout.ContentPane");
	
	
	dojo.require("baycik.grid.DataGrid");

	
	DataJs={};
	DataJs.init=function(){
		DataJs.tables.init();
	}
	DataJs.destroy=function(){
		data_grid.destroy();
		table_list.destroy();
	}
	DataJs.tables={};
	DataJs.tables.init=function(){
		DataJs.tables.initTableList();
		DataJs.tables.initDataGrid();
	}
	DataJs.tables.destroy=function(){
		DataJs.tables.data_grid.destroy();
		DataJs.tables.table_list.destroy();
	}
	DataJs.tables.initDataGrid=function(){
		DataJs.tables.data_grid=new baycik.grid.DataGrid( {}, 'data_grid' );
		with(DataJs.tables.data_grid){
			request.mod='Data';
			onStructure=function( request ){
				request.rq='GridStructure';
				Connector.addRequest(request,this,'setStructure');
			};
			onRequest=function( request ){
				request.rq='GridData';
				Connector.addRequest(request,this,'setData');
			};
		}
		DataJs.tables.data_grid.onDelete=function( request ){
			request.rq='DeleteGridRow';
			Connector.addRequest( request );
			DataJs.tables.data_grid.loadGrid();
		};
		DataJs.tables.data_grid.onUpdate=function( request ){
			request.rq='UpdateGridRow';
			Connector.addRequest( request );
		};
		DataJs.tables.data_grid.onInsert=function( request ){
			request.rq='InsertGridRow';
			Connector.addRequest( request );
		};
		DataJs.tables.data_grid.onUpload=function( request ){
			request.rq='GridUpload';
			request.tpl='data/file_uploader.tpl';
			Acc.showPopup({},function(){
			    DataJs.tables.data_grid.loadGrid()
			},request);
		}
		DataJs.tables.data_grid.onPrint=function( request ){
			request.mod='Data';
			request.rq='GridOut';
			Acc.printOut( request );
		};
		DataJs.tables.data_grid.onDownload=function( request ){
			request.mod='Data';
			request.rq='GridOut';
			request.out_type='.xls';
			request.limit=0;
			Connector.addRedirection( request );
		}
	}
	DataJs.tables.initTableList=function(){
		DataJs.tables.table_list=new baycik.grid.DataGrid( {}, 'table_list' );
		with( DataJs.tables.table_list ){
			request.mod='Data';
			request.table_name='table_list';
			onStructure=function(){
				var table_structure={readonly:1,hidestatus:1,hidefilter:1,selectionMode:'single',columns:[{field:"table_name",name:"Доступные таблицы"}]};
				setStructure( table_structure );
			};
			onRequest=function( request ){
				request.rq='PermitedTableList';
				Connector.addRequest(request,this,'setData');
			};
			startup();
		}
		DataJs.tables.table_list.onSelect=function( selected ){
			DataJs.tables.data_grid.request.table_name=selected[0].table_name;
			DataJs.tables.data_grid.startup();
		};
	};
</script>
<table width="100%">
  <tr>
    <td width="200" valign="top">
    	<div id="table_list"></div>
    </td>
    <td valign="top" align="center">
    	<div id="data_grid"></div>
    </td>
  </tr>
</table>

