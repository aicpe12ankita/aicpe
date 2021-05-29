
function makeString(object)
{
if (object == null) return '';
return String(object);
}
function escapeRegExp(str) {
return makeString(str).replace(/([.*+?^=!:${}()|[\]\/\\])/g, '\\$1');
}
function defaultToWhiteSpace(characters) {
if (characters == null)
return '\\s';
else if (characters.source)
return characters.source;
else
return '[' + escapeRegExp(characters) + ']';
}  
function ltrim(str, characters) {
var nativeTrimLeft = String.prototype.trimLeft;
str = makeString(str);
if (!characters && nativeTrimLeft) return nativeTrimLeft.call(str);
characters = defaultToWhiteSpace(characters);
return str.replace(new RegExp('^' + characters + '+'), '');
}
function trim(str, characters) {
var nativeTrim = String.prototype.trim;
str = makeString(str);
if (!characters && nativeTrim) return nativeTrim.call(str);
characters = defaultToWhiteSpace(characters);
return str.replace(new RegExp('^' + characters + '+|' + characters + '+$', 'g'), '');
}
function rtrim(str, characters) {
var nativeTrimRight = String.prototype.trimRight;
str = makeString(str);
if (!characters && nativeTrimRight) return nativeTrimRight.call(str);
characters = defaultToWhiteSpace(characters);
return str.replace(new RegExp(characters + '+$'), '');
}

function change_search_data($key,$data)
{
  var url_string = window.location.protocol+"://"+window.location.hostname+window.location.port+window.location.pathname;
  var url_string = "";
  var search = ltrim(window.location.search,"?")
  var search_join = [];
  var $target_found = false;
  search_split = search.split("&");

	if(search!="")
	{

	  $.each(search_split,function($index,$value)
	  {

		  $value_split = $value.split("=");

		  if($value_split.length=2)
		  {
			if($value_split[0]==$key)
			{
			  $value_split[1] = $data
			  $target_found = true;
			}
			
		  }
		  $value_join = $value_split.join("=");
		  search_join.push($value_join);
	  });
	}




	if($target_found==false)
	{
	  search_join.push($key+"="+$data)
	}

	url_string  +=("?"+(search_join.join("&")));
	history.pushState(null,null,url_string);
}

