<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="css/style.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
	<script src="https://use.fontawesome.com/c560c025cf.js"></script>
	<title>Checkout System</title>
</head>
<body class="text-center">
  	<div class="container">
   		<div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Checkout System
                <div class="clearfix"></div>
            </div>
            <form method="post" accept-charset="utf-8" action="">
            <div class="card-body">
                    <!-- APPLE -->
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="images/apple.jpeg" alt="prewiew" width="40" height="40">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h6 class="product-name"><strong>Apple</strong></h6>
                            
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-4 col-sm-4 col-md-4 text-md-right" style="padding-top: 5px">
                                <h6><strong>$0.70 <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                            	<textarea rows="1" cols="1" name="apple_qty" id="apple_qty" style="resize: none;"><?php echo $a_qty ?? 0;?></textarea>
                            </div>
                             <div class="col-4 col-sm-4 col-md-4">
                                <input type="button" value="+" id="Apple" class="plus"/>
                            </div>
                            
                        </div>
                    </div>
                    <hr>
                    
                    <!-- ORANGE -->
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="images/orange.jpeg" alt="orange" width="40" height="40">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h6 class="product-name"><strong>Orange</strong></h6>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-4 col-sm-4 col-md-4 text-md-right" style="padding-top: 5px">
                                <h6><strong>$0.35 <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                            	<textarea rows="1" cols="1" name="orange_qty" id="orange_qty" style="resize: none;" ><?php echo $o_qty ?? 0;?></textarea>
                            </div>
                             <div class="col-4 col-sm-4 col-md-4">
                                <input type="button" value="+" id="Orange" class="plus"/>
                            </div>
                           
                        </div>
                        

                    </div>
                    <hr>    
                    <div class="row">
                        <div class="col-4">
                                <h4>Items</h4>
                        </div>
                        <div class="col-4">                            
                            <input id="itemList" type="text" class="form-control" name="list_items" value="<?php echo isset($string) ? $string: ""; ?>" placeholder="Type the list of items" />
                           
                        </div>
                      
                        <div class="col-4 row"> 
                        	<div class="col-6"> 
                        		<h4>Total:</h4>
                        	</div>
                        	<div class="col-6"> 
                        		<textarea style=" border: none;resize: none;" rows="1" cols="4" name="total_val" id="total_val" >$<?php echo $totalValue ?? "0.00";?></textarea>
                        	</div>
                        </div>
                        
                    </div>
                    <hr>                 
                <div class="row">
                    <div class="col-6 col-sm-6 text-sm-center col-md-6 text-md-left">
						<strong>Apply Offers</strong>
                    	<div class="form-check">
						    <input type="checkbox" class="form-check-input" name="a_offer" value="1" <?php if (isset($a_offer)) { echo 'checked=checked'; } ?>>
						    <label class="form-check-label" for="exampleCheck1">Buy 1, get 1 free on Apples</label>
						</div>
						<div class="form-check">
						    <input type="checkbox" class="form-check-input"  name="o_offer" value="1" <?php if (isset($o_offer)) { echo 'checked=checked'; } ?>>
						    <label class="form-check-label" for="exampleCheck1">3 for the price of 2 on Oranges</label>
						</div>    

                    </div>
                    <div class="col-6 col-sm-6 col-md-6 ">
                        <div class="pull-right">
                			<button type="submit" class="btn btn-primary">Checkout</button>
            			</div>                            
                    </div>
                    </div>

            </div>
        	</form>
           <div class="card-footer">
           		<div class="row">
           			<div class="col-12 col-sm-12 text-sm-center col-md-12 pull-right">
           				<?php if (isset($a_qty)){
	           					echo "<i>Apple(s)*".$a_qty." & Orange(s)*".$o_qty."</i><br/>";
	           					if (isset($a_offer) || isset($o_offer)){
	           						echo "<p style='color:red;font-size:10px'>*Offer Applied</p>";
	           						echo "<p style='color:red'>You Saved:$".number_format(($totalValue-$total),2)."</p>";
	           					}
           					}
           				?>
           			</div>
           		</div>
           		<div class="row">
           			<div class="col-12 col-sm-12 text-sm-center col-md-12 pull-right" style="margin-top:10px">
	                        Total price: <b>$<?php echo number_format($total, 2);?></b>
           			</div>
           		</div>
               
                
            </div>
        </div>
	</div>  
</body>
</html>


<script type="text/javascript">
$(function() {
	function split( val ) {
		return val.split( /,\s*/ );
	}
	function extractLast( term ) {
		return split( term ).pop();
	}
	     
	var list = [
		{
		value: "Apple",
		label: "Apple"
		},
		{
		value: "Orange",
		label: "Orange"
		}
	];
     
	$( "#itemList" ).bind( "keydown", function( event ) {
		if ( event.keyCode === $.ui.keyCode.TAB &&
		$( this ).autocomplete( "instance" ).menu.active ) {
			event.preventDefault();
		}
		})
		.autocomplete({
			minLength: 0,
			source: function( request, response ) {
			response( $.ui.autocomplete.filter(
			list, extractLast( request.term ) ) );
		},

		focus: function() {
			return false;
		},
		select: function( event, ui ) {
			var terms = split( this.value );
			terms.pop();
			terms.push( ui.item.value );
			terms.push( "" );
			this.value = terms.join( "," );	
			
            var countApple=countOccurences(this.value,"Apple"); 
		    $("textarea#apple_qty").val(countApple);  

		    var countOrange=countOccurences(this.value,"Orange"); 
		    $("textarea#orange_qty").val(countOrange);  

		    var total_rate=(countApple*0.70)+(countOrange*0.35);
		    total_rate=(Math.round(total_rate * 100) / 100).toFixed(2);
		    $("textarea#total_val").val('$'+total_rate);

			return false;
		}


	});
	
	$('.plus').click(function (event) {
		var fruit=$( this ).attr('id');
		var cur_val = $('#itemList').val();
		if(cur_val)
		  $('#itemList').val(cur_val  + fruit+',');
		else
		  $('#itemList').val(fruit+',');
		var countApple=countOccurences($('#itemList').val(),"Apple"); 
	    $("textarea#apple_qty").val(countApple);  

	    var countOrange=countOccurences($('#itemList').val(),"Orange"); 
	    $("textarea#orange_qty").val(countOrange);  

	    var total_rate=(countApple*0.70)+(countOrange*0.35);
	    total_rate=(Math.round(total_rate * 100) / 100).toFixed(2);
	    $("textarea#total_val").val('$'+total_rate);
	});

});   
function countOccurences(string, word) {
   return string.split(word).length - 1;
}  
</script>













