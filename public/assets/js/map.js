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

            if(this.point.name == "Павлодар"){
                return "<b>"+ "Павлодарская область:"+ "</b><br>" + "<b>Экибастуз-2</b>*<br>" + "Механизированный пункт подготовки вагонов<br>" + "<b>Экибастуз-2</b><br>" + "Текущий отцепочный ремонт ТОР-1<br>" + "<b>Экибастуз-2</b><br>" + "Текущий отцепочный ремонт ТОР-2<br>" + "<b>Павлодар</b><br>" + "Механизированный пункт ремонта вагонов";
            }
            return this.point.name

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
                        let title = this.x == 6 ? "<b>Экибастуз-2</b>*<br>" + "Механизированный пункт подготовки вагонов<br>" + "<b>Экибастуз-2</b><br>" + "Текущий отцепочный ремонт ТОР-1<br>" + "<b>Экибастуз-2</b><br>" + "Текущий отцепочный ремонт ТОР-2<br>" + "<b>Павлодар</b><br>" + "Механизированный пункт ремонта вагонов" : "Отсутствует";
                        $(".city").html(cities[this.x])
                        $(".office").html(title)

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
        data: data,
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

