var data = [
    ['kz-5085', 120],
    ['kz-qo', 1],
    ['kz-ac', 2],
    ['kz-as', 3],
    ['kz-qs', 4],
    ['kz-nk', 5],
    ['kz-pa', 6],
    ['kz-am', 7],
    ['kz-zm', 8],
    ['kz-ek', 9],
    ['kz-ar', 10],
    ['kz-mg', 11],
    ['kz-aa', 12],
    ['kz-at', 13],
    ['kz-wk', 14],
    ['kz-sk', 15],
    ['kz-qg', 16]
];

// Create the chart
Highcharts.mapChart('container', {
    chart: {
        map: 'countries/kz/kz-all',
        height:'55%',
        responsive:true,
        height: (9 / 16 * 100) + '%',
        margin: [0, 10, 0, 10]
    },
    exporting: {
        enabled: false
    },

    title: false,
    styledMode: true,
    tooltip: {
        enabled: true,
        formatter: function (){
            switch (this.point.name){
                case "Павлодарская область":
                    return "<b>"+ "Павлодарская область:"+ "</b><br>" + "<b>Экибастуз-2</b>*<br>" + "Механизированный пункт подготовки вагонов<br>" + "<b>Экибастуз-2</b><br>" + "Текущий отцепочный ремонт ТОР-1<br>" + "<b>Экибастуз-2</b><br>" + "Текущий отцепочный ремонт ТОР-2<br>" + "<b>Павлодар</b><br>" + "Механизированный пункт ремонта вагонов";
                case "Костанайская область":
                    return "<b>Есиль (пункт технического обслуживания)</b><br><b>Тобол (пункт технического обслуживания)</b>"
                case "Актюбинская область":
                    return "<b>Кандыагаш (механизированный пункт технического обслуживания)</b>"
                case "Карагандинская область":
                    return "<b>Караганда (механизированный вагоноремонтный пункт)</b><br><b>Карабас (механизированный вагоноремонтный пункт)</b>"
                case "Алматинская область":
                    return "<b>Алматы-1 (Цех текущего отцепочного ремонта)</b><br><b>Алтынколь (Текущий отцепочный ремонт)</b>"
                default:
                    return this.point.name
            }




        }

    },

    plotOptions: {
        series: {
            point: {
                events: {
                    mouseOver: function () {
                        let cities = {
                            1: "Кызылорда",
                            2: "Алматы",
                            4: "Костанай",
                            5: "Северный Казахстан",
                            6: "Павлодар",
                            7: "Нурсултан",
                            8: "Жамбыл",
                            9: "Восточный Казахстан",
                            10: "Атырау",
                            11: "Мангистау",
                            12: "Алматы",
                            13: "Актобе",
                            14: "Западный Казахстан",
                            15: "Южный Казахстан",
                            16: "Караганда"
                        };
                        // let title = this.x == 6 ? "<b>Экибастуз-2</b>*<br>" + "Механизированный пункт подготовки вагонов<br>" + "<b>Экибастуз-2</b><br>" + "Текущий отцепочный ремонт ТОР-1<br>" + "<b>Экибастуз-2</b><br>" + "Текущий отцепочный ремонт ТОР-2<br>" + "<b>Павлодар</b><br>" + "Механизированный пункт ремонта вагонов" : "Отсутствует";
                        // $(".city").html(cities[this.x])
                        // $(".office").html(title)

                        // console.log(this.series.data[this.x]["hc-key"]);

                    },
                    renderTo:function (){alert("hello")}
                }
            },
            events: {
                mouseOut: function () {

                }
            }
        }
    },


    mapNavigation: {
        enabled: false,
        buttonOptions: {
            verticalAlign: 'bottom'
        }
    },

    // colorAxis: {
    //     min: 0
    // },

    series: [{
        data: data.map(elem => {
            let regions = ["kz-qo","kz-zm","kz-nk","kz-wk","kz-ar","kz-mg","kz-am","kz-ek","kz-sk","kz-am","kz-as"]
            if( regions.includes(elem[0]) ){
                elem.push('#D3D3D3');
            }

            return elem;
        }),
        keys: ['hc-key', 'value', 'color'],
        color: "#FDE0C0",
        name: "",
        states: {
            hover: {
                color: '#FEA33A',

            }
        },
        dataLabels: {

            enabled: true,
            format:"{point.name}"

        },

    }]
});

$(".highcharts-credits").css({"display":"none"})



$("#button").click(function (event){
    if($("#name").val() == "" || $("#email").val() == "" || $("#subject").val() == "" || $("#message").val() == ""){
        {
            event.preventDefault();
            alert("Заполните все поля!");
        }
    }


})
$('.owl-carousel').owlCarousel({
    loop:true,
    autoWidth:false,
    items:1,
    autoHeight: false,
    singleItem:true,
    autoplay: true,
    autoplayTimeout: 3500,
    smartSpeed: 650

})

