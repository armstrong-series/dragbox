var options={chart:{height:300,type:"area",stacked:!0,toolbar:{show:!1},dropShadow:{enabled:!0,opacity:.1,blur:5,left:-10,top:10},events:{selection:function(e,a){}}},dataLabels:{enabled:!1},stroke:{curve:"straight",width:3},series:[{name:"iPhone",data:generateDayWiseTimeSeries(new Date("11 Feb 2019 GMT").getTime(),20,{min:10,max:60})},{name:"Samsung",data:generateDayWiseTimeSeries(new Date("11 Feb 2019 GMT").getTime(),20,{min:10,max:20})},{name:"Pixel",data:generateDayWiseTimeSeries(new Date("11 Feb 2019 GMT").getTime(),20,{min:10,max:15})}],theme:{monochrome:{enabled:!0,color:"#ffba99",shadeIntensity:.1}},grid:{borderColor:"#ffffff",strokeDashArray:5,xaxis:{lines:{show:!0}},yaxis:{lines:{show:!1}},padding:{top:0,right:0,bottom:20,left:30}},legend:{position:"bottom",horizontalAlign:"center"},xaxis:{type:"datetime"}},chart=new ApexCharts(document.querySelector("#basic-area-stack-graph"),options);function generateDayWiseTimeSeries(e,a,t){for(var i=0,r=[];i<a;){var n=e,o=Math.floor(Math.random()*(t.max-t.min+1))+t.min;r.push([n,o]),e+=864e5,i++}return r}chart.render();