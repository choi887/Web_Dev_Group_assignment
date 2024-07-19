<x-app-layout>
    <x-slot:titleName>
        Dashboard - TripIt
    </x-slot:titleName>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <section>
        <x-sucess-notification></x-sucess-notification>
        <x-fail-notification></x-fail-notification>
        <div class="flex">
            <x-sidebar-create></x-sidebar-create>
            <div class="max-w-screen-xl w-full mt-4  lg:px-12 overflow-hidden">
                <div class=" grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-3 mb-10 ">
                    <!-- Card with graph start -->
                    <div class="max-w-sm w-full border border-gray-200 rounded-lg shadow-xl  p-4 md:p-6">
                        <div class="flex justify-between pb-4 mb-4 border-b border-gray-200 ">
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-lg bg-blue-800  flex items-center justify-center me-3">
                                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 19">
                                        <path
                                            d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                                        <path
                                            d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="leading-none text-2xl font-bold text-gray-900 ">3.4k
                                    </h5>
                                    <p class="text-sm font-normal text-gray-500 ">Leads generated per
                                        week</p>
                                </div>
                            </div>
                            <div>
                                <span
                                    class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md">
                                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4" />
                                    </svg>
                                    42.5%
                                </span>
                            </div>
                        </div>

                        <div class="grid grid-cols-2">
                            <dl class="flex items-center">
                                <dt class="text-gray-500 text-sm font-normal me-1">Money spent:</dt>
                                <dd class="text-gray-900 text-sm  font-semibold">$3,232</dd>
                            </dl>
                            <dl class="flex items-center justify-end">
                                <dt class="text-gray-500 text-sm font-normal me-1">Conversion rate:
                                </dt>
                                <dd class="text-gray-900 text-sm  font-semibold">1.2%</dd>
                            </dl>
                        </div>

                        <div id="column-chart" class="max-h-10"></div>

                    </div>
                    <!-- bar chart end -->
                    <div class="max-w-sm w-full border border-gray-200 bg-white rounded-lg shadow-xl p-4 md:p-6">

                        <div class="flex justify-between mb-3">
                            <div class="flex justify-center items-center">
                                <h5 class="text-xl font-bold leading-none text-gray-900  pe-1">Website
                                    traffic</h5>
                                <svg data-popover-target="chart-info" data-popover-placement="bottom"
                                    class="w-3.5 h-3.5 text-gray-500  hover:text-gray-900  cursor-pointer ms-1"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm0 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm1-5.034V12a1 1 0 0 1-2 0v-1.418a1 1 0 0 1 1.038-.999 1.436 1.436 0 0 0 1.488-1.441 1.501 1.501 0 1 0-3-.116.986.986 0 0 1-1.037.961 1 1 0 0 1-.96-1.037A3.5 3.5 0 1 1 11 11.466Z" />
                                </svg>
                                <div data-popover id="chart-info" role="tooltip"
                                    class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                    <div class="p-3 space-y-2">
                                        <h3 class="font-semibold text-gray-900 ">Activity growth -
                                            Incremental</h3>
                                        <p>Report helps navigate cumulative growth of community activities. Ideally, the
                                            chart should have a growing trend, as stagnating chart signifies a
                                            significant decrease of community activity.</p>
                                        <h3 class="font-semibold text-gray-900 ">Calculation</h3>
                                        <p>For each date bucket, the all-time volume of activities is calculated. This
                                            means that activities in period n contain all activities up to period n,
                                            plus the activities generated by your community in period.</p>
                                        <a href="#"
                                            class="flex items-center font-medium text-blue-600 hover:text-blue-700 hover:underline">Read
                                            more <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                            </svg></a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="border-b border-gray-200 pb-4">
                            <div class="flex" id="devices">
                                <div class="flex items-center me-4">
                                    <input id="desktop" type="checkbox" value="desktop"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                    <label for="desktop"
                                        class="ms-2 text-sm font-medium text-gray-900 ">Desktop</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="tablet" type="checkbox" value="tablet"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2 ">
                                    <label for="tablet" class="ms-2 text-sm font-medium text-gray-900 ">Tablet</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="mobile" type="checkbox" value="mobile"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2 ">
                                    <label for="mobile" class="ms-2 text-sm font-medium text-gray-900 ">Mobile</label>
                                </div>
                            </div>
                        </div>
                        <!-- Donut Chart -->
                        <div class="py-6" id="donut-chart"></div>
                        <div class="grid grid-cols-1 items-center border-gray-200 justify-between">
                            <div class="flex justify-between items-center pt-5">
                            </div>
                        </div>
                    </div>
                    <!-- donut chart end -->

                </div>


            </div>

        </div>
        <!-- content container end -->
        </div>
        </div>
    </section>
</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    const options = {
        colors: ["#1A56DB", "#FDBA8C"],
        series: [{
                name: "Organic",
                color: "#1A56DB",
                data: [{
                        x: "Mon",
                        y: 231
                    },
                    {
                        x: "Tue",
                        y: 122
                    },
                    {
                        x: "Wed",
                        y: 63
                    },
                    {
                        x: "Thu",
                        y: 421
                    },
                    {
                        x: "Fri",
                        y: 122
                    },
                    {
                        x: "Sat",
                        y: 323
                    },
                    {
                        x: "Sun",
                        y: 111
                    },
                ],
            },
            {
                name: "Social media",
                color: "#FDBA8C",
                data: [{
                        x: "Mon",
                        y: 232
                    },
                    {
                        x: "Tue",
                        y: 113
                    },
                    {
                        x: "Wed",
                        y: 341
                    },
                    {
                        x: "Thu",
                        y: 224
                    },
                    {
                        x: "Fri",
                        y: 522
                    },
                    {
                        x: "Sat",
                        y: 411
                    },
                    {
                        x: "Sun",
                        y: 243
                    },
                ],
            },
        ],
        chart: {
            type: "bar",
            height: "210px",
            fontFamily: "Inter, sans-serif",
            toolbar: {
                show: false,
            },
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "70%",
                borderRadiusApplication: "end",
                borderRadius: 8,
            },
        },
        tooltip: {
            shared: true,
            intersect: false,
            style: {
                fontFamily: "Inter, sans-serif",
            },
        },
        states: {
            hover: {
                filter: {
                    type: "darken",
                    value: 1,
                },
            },
        },
        stroke: {
            show: true,
            width: 0,
            colors: ["transparent"],
        },
        grid: {
            show: false,
            strokeDashArray: 4,
            padding: {
                left: 2,
                right: 2,
                top: -14
            },
        },
        dataLabels: {
            enabled: false,
        },
        legend: {
            show: false,
        },
        xaxis: {
            floating: false,
            labels: {
                show: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                    cssClass: 'text-xs font-normal fill-gray-500 '
                }
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
        },
        yaxis: {
            show: false,
        },
        fill: {
            opacity: 1,
        },
    }

    if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("column-chart"), options);
        chart.render();
    }
</script>

<script>
    const getChartOptions = () => {
        return {
            series: [35.1, 23.5, 2.4, 5.4],
            colors: ["#1C64F2", "#16BDCA", "#FDBA8C", "#E74694"],
            chart: {
                height: 250,
                width: "100%",
                type: "donut",
            },
            stroke: {
                colors: ["transparent"],
                lineCap: "",
            },
            plotOptions: {
                pie: {
                    donut: {
                        labels: {
                            show: true,
                            name: {
                                show: true,
                                fontFamily: "Inter, sans-serif",
                                offsetY: 20,
                            },
                            total: {
                                showAlways: true,
                                show: true,
                                label: "Unique visitors",
                                fontFamily: "Inter, sans-serif",
                                formatter: function(w) {
                                    const sum = w.globals.seriesTotals.reduce((a, b) => {
                                        return a + b
                                    }, 0)
                                    return '$' + sum + 'k'
                                },
                            },
                            value: {
                                show: true,
                                fontFamily: "Inter, sans-serif",
                                offsetY: -20,
                                formatter: function(value) {
                                    return value + "k"
                                },
                            },
                        },
                        size: "80%",
                    },
                },
            },
            grid: {
                padding: {
                    top: -2,
                },
            },
            labels: ["Direct", "Sponsor", "Affiliate", "Email marketing"],
            dataLabels: {
                enabled: false,
            },
            legend: {
                position: "bottom",
                fontFamily: "Inter, sans-serif",
            },
            yaxis: {
                labels: {
                    formatter: function(value) {
                        return value + "k"
                    },
                },
            },
            xaxis: {
                labels: {
                    formatter: function(value) {
                        return value + "k"
                    },
                },
                axisTicks: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
            },
        }
    }

    if (document.getElementById("donut-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("donut-chart"), getChartOptions());
        chart.render();

        // Get all the checkboxes by their class name
        const checkboxes = document.querySelectorAll('#devices input[type="checkbox"]');

        // Function to handle the checkbox change event
        function handleCheckboxChange(event, chart) {
            const checkbox = event.target;
            if (checkbox.checked) {
                switch (checkbox.value) {
                    case 'desktop':
                        chart.updateSeries([15.1, 22.5, 4.4, 8.4]);
                        break;
                    case 'tablet':
                        chart.updateSeries([25.1, 26.5, 1.4, 3.4]);
                        break;
                    case 'mobile':
                        chart.updateSeries([45.1, 27.5, 8.4, 2.4]);
                        break;
                    default:
                        chart.updateSeries([55.1, 28.5, 1.4, 5.4]);
                }

            } else {
                chart.updateSeries([35.1, 23.5, 2.4, 5.4]);
            }
        }

        // Attach the event listener to each checkbox
        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener('change', (event) => handleCheckboxChange(event, chart));
        });
    }
</script>
