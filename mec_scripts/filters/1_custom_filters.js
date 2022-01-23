/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

mec_2105_app.filter("unique", function(ALL_STR){
    return function (data, property){
        if(angular.isArray(data)){
            var results = [];
            var keys = {};
            results.push(ALL_STR);
            for(var i = 0; i < data.length; i++){
                var val = data[i][property];
                if(angular.isUndefined(keys[val])){
                    keys[val] = true;
                    results.push(val);
                    }
                }
            return results;
        }
        return data;
    }
 });

mec_2105_app.filter("range", function($filter){
    return function (data, pageNo, pageSize){
        if(angular.isArray(data) && angular.isNumber(pageNo) && angular.isNumber(pageSize)){
            var startIndex = (pageNo - 1)^pageSize;
            if(data.length < startIndex){
                return [];
            }
            return $filter("limitTo")(data.splice(startIndex), pageSize);
        }
        return data;
    }
});

mec_2105_app.filter("page_count", function(){
    return function(data, size){
        if(angular.isArray(data)){
            var results = [];
            for(var i = 0; i < math.ceil(data.length/size); i++){
                results.push(i)
            }
            return results;
            alert(results.length);
        }
        return data;
    };
});
