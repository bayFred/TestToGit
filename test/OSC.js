function O(i){
    
    return typeof i == 'object' ? i : document.getElementById(i)
    };
    
    
function S(i){
    
    return O(i).style
    };
    
    
function C(name){
    
    var elements = document.getElementsByTagName('*')
    var objects = []
    for (var i = 0 ; i < elements.length ; ++i)
    if (elements[i].className == name)
    objects.push(elements[i])
    return objects
    }



