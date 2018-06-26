let xhr = new XMLHttpRequest();

function getTitle() 
{
xhr.open('GET', "https://myanimelist.net/animelist/Gogetaex", true);
xhr.setRequestHeader("Authorization", "Basic " + btoa("Gogetaex:alchemist"));
xhr.send();
xhr.addEventListener("readystatechange", processRequest, false);
}


function processRequest(e) {
    if (xhr.readyState == 4 && xhr.status == 200) {
        let response = JSON.parse(xhr.responseText);
g    }
}

console.log("loadedmyjs.js")
getTitle();



xhr.open('GET', "http://api.wunderground.com/api/3d8a888d1bf7d060/conditions/q/"+state+"/"+city+".json", true);
xhr.send();
xhr.addEventListener("readystatechange", processRequest, false);


function processRequest(e) {
    if (xhr.readyState == 4 && xhr.status == 200) {
        let response = JSON.parse(xhr.responseText);
        document.getElementById("temp").innerHTML=response.current_observation.temp_f;
        document.getElementById("humid").innerHTML=response.current_observation.relative_humidity;
        document.getElementById("direct").innerHTML=response.current_observation.wind_dir;
        document.getElementById("speed").innerHTML=response.current_observation.wind_mph;
    }
}
