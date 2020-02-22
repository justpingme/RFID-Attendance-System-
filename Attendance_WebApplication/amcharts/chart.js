var chart = AmCharts.makeChart("chartdiv", {
    "theme": "light",
    "type": "serial",
    "startDuration": 2,
    "dataProvider": [{
        "subject": "JAVA",
        "visits": 100,
        "color": "#FF0F00"
    }, {
        "subject": "JAVA LAB",
        "visits": 90,
        "color": "#FF6600"
    }, {
        "subject": "DSIN-C",
        "visits": 50,
        "color": "#FF9E01"
    }, {
        "subject": "DSIN-C LAB",
        "visits": 70,
        "color": "#FCD202"
    }, {
        "subject": "OS",
        "visits": 40,
        "color": "#F8FF01"
    }, {
        "subject": "PE",
        "visits": 80,
        "color": "#B0DE09"
    }, {
        "subject": "LINUX LAB",
        "visits": 70,
        "color": "#04D215"
    }, {
        "subject": "KANADA KALI",
        "visits": 30,
        "color": "#0D8ECF"
    }],
    "valueAxes": [{
        "position": "left",
        "axisAlpha":0,
        "gridAlpha":0.03,
        "title": "ATTENDANCE"
    }],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "colorField": "color",
        "fillAlphas": 0.90,
        "lineAlpha": 0.2,
        "type": "column",
        "topRadius":0.25,
        "valueField": "visits"
    }],
    "depth3D": 40,
	"angle": 30,
    "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 0.3,
        "zoomable": true
    },
    "categoryField": "subject",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha":2,
        "gridAlpha":0.03

    },
    "export": {
    	"enabled": true
     }

}, 0);