// проверить свободные
var string = '';
for(var i=1;i<199;i++){
	if($('.aa'+i).length==0){
		string += '.aa'+i;
	}
}
console.log(string);