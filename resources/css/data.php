//product
Schema::create('products', function (Blueprint $table) {

});

//vendors
Schema::create('vendors', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->longText('address');
$table->timestamps();
});

//buyers
Schema::create('buyers', function (Blueprint $table) {
$table->id();
$table->string('name');
$table->longText('address');
$table->timestamps();
});

//contacts
Schema::create('vendor_contacts', function (Blueprint $table) {
$table->id();
$table->string('contact_name');
$table->string('designation');
$table->string('email')->nullable();
$table->string('phone')->nullable();
// $table->unsignedBigInteger('vendor_id');
// $table->unsignedBigInteger('buyer_id');

// $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade');
// $table->foreign('buyer_id')->references('id')->on('buyers')->onDelete('cascade');


$table->timestamps();
});


//product_vendors
Schema::create('product_vendors', function (Blueprint $table) {
$table->id();
$table->unsignedBigInteger('product_id');
$table->unsignedBigInteger('vendor_id');
$table->integer('available_quantity')->default('0');
$table->integer('unit_price')->default('0');

$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
$table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade');
$table->timestamps();
});


//buyer_product
Schema::create('product_buyers', function (Blueprint $table) {
$table->id();
$table->unsignedBigInteger('product_id');
$table->unsignedBigInteger('buyer_id');
$table->integer('required_quantity')->default('0');
$table->integer('unit_price')->default('0');

$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
$table->foreign('buyer_id')->references('id')->on('buyers')->onDelete('cascade');
$table->timestamps();
});
