<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>PRODUCTS</legend>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name_fr">PRICE</label>  
  <div class="col-md-4">
  <input id="product_name_fr" name="price" placeholder="PRODUCT PRICE" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_category">PRODUCT CATEGORY</label>
  <div class="col-md-4">
    <select id="product_categorie" name="product_category" class="form-control">
        @foreach($categories as $category)
    	<option value="{{ $category->id }}">{{ $category->name }}</option>
    	@endforeach
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>  
  <div class="col-md-4">
  <input id="available_quantity" name="product_img" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Add product</label>
  <div class="col-md-4">
    <button id="singlebutton" name="submit" class="btn btn-primary">Button</button>
  </div>
  </div>

</fieldset>
</form>
