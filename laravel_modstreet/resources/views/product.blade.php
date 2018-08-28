<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Items</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
	$(function(){
		$("#AddProductBtn").on('click', function(){
			$("#addProductForm").toggle(1500);
		});
		
	});
	
	</script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="js/prod.js"></script>
</head>
<body>

<div id="container" ng-app="empApp" ng-controller="empCtrl">
	<h1>Items <span style="float:right"><button id="AddProductBtn">Add Item</button></span></h1>

	<div id="body">
    	<form id="addProductForm" style="display:none">
    	<table width="100%">
        	<tr class="odd_data">
            	<td width="20%">Item Name</td>
                <td width="20%">Design Code</td>
                <td width="10%">Action</td>
            </tr>
            
            <tr class="even_data">
            	<td><input type="text" name="name" value="" ng-model="prodForm.name"></td>                
                <td><input type="text" name="designation" value="" ng-model="prodForm.designation"></td>
                <td><button ng-click="saveData()">Add</button></td>
            </tr>
        </table>
        </form>
		<table width="100%">
        	<tr class="odd_data">
            	<td width="20%">Item Name</td>
                <td width="20%">Item Size</td>
                <td width="20%">Item Price</td>
                <td width="20%">Item Category</td>
                <td width="10%">Action</td>
            </tr>
            
            <tr class="even_data" ng-repeat="product in prodData">
            	<td colspan="6">
                	<table width="100%">
                    	<tr>
                        	<td width="20%"><% product.name %></td>
                            <td width="20%"><% product.size %></td>
							<td width="20%"><% product.price %></td>
                            <td width="20%"><% product.category %></td>
                            <td width="10%"><button class="EditProductBtn" ng-click="editData(product.id)">Edit</button>&nbsp;<button class="DeleteProductBtn" ng-click="deleteData(product.id)">Delete</button></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
	</div>
	
	
<p class="footer">Test assignment submitted by <strong>J. Middya</strong></p>
</div>

</body>
</html>