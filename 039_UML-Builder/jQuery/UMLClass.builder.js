function UMLClass(className){
		this.className = className;
		this.UMLDrawClass = function(){
			$("body").append('<div class="container ' + this.className  + '"><div class="header">' + this.className + '</div><div class="body"></div></div>');
			};
		this.UMLDrawProperty = function(description, elipsis, property){	
			this.property = [property[0] , property[1]];
			this.description = description;
			this.elipsis = elipsis;
			if(this.description == true) {
				$(".container." + this.className + " .body").append('<div class="bodyUpper description">&lsaquo;&lsaquo;' + this.property[0] + '&rsaquo;&rsaquo;</div>')
				}else if(this.description == false && this.property[1] == false){
					$(".container." + this.className + " .body").append('<div class="bodyUpper">' + this.property[0] + '</div>')
				}else if(this.property[1] == true && this.elipsis != true){
					$(".container." + this.className + " .body").append('<div class="bodyUpper last">' + this.property[0] + '</div>')
				}else{
					$(".container." + this.className + " .body").append('<div class="bodyUpper last">' + '...' + '</div>')
				}
							
		};
		this.UMLDrawMethod = function(description, elipsis, method){
		this.method = method;
		this.description = description;
		this.elipsis =  elipsis;
		if (this.method != undefined && this.description == true){
			$(".container." + this.className + " .body").append('<div class="bodyLower">&lsaquo;&lsaquo;' + this.method + '&rsaquo;&rsaquo;</div>');
			}else if(this.method != undefined && this.elipsis == false){
				$(".container." + this.className + " .body").append('<div class="bodyLower">' + this.method + '</div>');
			}else if(this.elipsis == true){
				$(".container." + this.className + " .body").append('<div class="bodyLower">' + '...' + '</div>');
			}else if(this.method != undefined){
				$(".container." + this.className + " .body").append('<div class="bodyLower">' + this.method + '</div>');
			}
		}
		
	}