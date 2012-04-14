function UMLPackage(packageName){
	this.packageName = packageName;
	this.UMLDrawPackage = function(){
		$("body").append('<div class="container Package">' + this.packageName  + '<div class="header"></div><div class="body"></div></div>');
	};
	//this.UML
}

/*
<div class="container Package">
	<div class="header">Package</div>
	<div class="body">
		<div class="member">Class1</div>
		<div class="member">Class2</div>
		<div class="member">Class3</div>
		<div class="member">Class4</div>
	</div>
</div>
*/