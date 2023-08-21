const regionChart = (regionId) => {
    $.post(
        "process-compare.php", {
            regionChart: true,
            regionId: regionId
        },
        (data) => {
            console.log(data)
            dataArray = JSON.parse(data)
            names = dataArray.names
            results = dataArray.results
            if (document.querySelectorAll('#d-activity').length) {
                const colors = ["#012E88", "#A51232"];
                const options = {
                    series: [{
                        name: "No. of votes",
                        data: results,
                    }, ],
                    chart: {
                        type: "bar",
                        height: 230,
                        stacked: true,
                        toolbar: {
                            show: false,
                        },
                    },
                    colors: colors,
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: "20%",
                            endingShape: "rounded",
                            borderRadius: 2,
                        },
                    },
                    legend: {
                        show: false,
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ["transparent"],
                    },
                    xaxis: {
                        categories: names,
                        labels: {
                            minHeight: 20,
                            maxHeight: 70,
                            style: {
                                colors: "#8A92A6",
                            },
                        },
                    },
                    yaxis: {
                        title: {
                            text: "No of votes",
                        },
                        labels: {
                            minWidth: 19,
                            maxWidth: 19,
                            style: {
                                colors: "#8A92A6",
                            },
                        },
                    },
                    fill: {
                        opacity: 1,
                    },
                    tooltip: {
                        y: {
                            formatter: function(val) {
                                return val + " voters";
                            },
                        },
                    },
                };
                const chart = new ApexCharts(document.querySelector("#d-activity"), options);
                chart.render();
                //color customizer
                document.addEventListener("theme_color", (e) => {
                    const colors = ["#012E88", "#A51232"];

                    const newOpt = {
                        colors: colors,
                        fill: {
                            type: "gradient",
                            gradient: {
                                shade: "dark",
                                type: "vertical",
                                gradientToColors: colors, // optional, if not defined - uses the shades of same color in series
                                opacityFrom: 1,
                                opacityTo: 1,
                                colors: colors,
                            },
                        },
                    };
                    chart.updateOptions(newOpt);
                });
                //Font customizer
                document.addEventListener("body_font_family", (e) => {
                    let prefix =
                        getComputedStyle(document.body).getPropertyValue("--prefix") || "bs-";
                    if (prefix) {
                        prefix = prefix.trim();
                    }
                    const font_1 = getComputedStyle(document.body).getPropertyValue(
                        `--${prefix}body-font-family`
                    );
                    const fonts = [font_1.trim()];
                    const newOpt = {
                        chart: {
                            fontFamily: fonts,
                        },
                    };
                    chart.updateOptions(newOpt);
                });
            }
        }
    )
}

regionChart(1)