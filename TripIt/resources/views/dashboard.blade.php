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
            <div class="max-w-screen-xl w-full mt-4 lg:px-12 overflow-hidden">
                <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-3 mb-10">
                    <!-- Card with graph start -->
                    <div class="max-w-sm w-full border border-gray-200 rounded-lg shadow-xl mx-auto  p-4 md:p-6">
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
                                    <h5 class="leading-none text-2xl font-bold text-blue-600 ">3.4k
                                    </h5>
                                    <p class="text-sm font-semibold text-blue-500 ">Ads generated per
                                        week</p>
                                </div>
                            </div>
                            <div>
                                <span
                                    class="bg-green-200 text-green-700 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md">
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
                    <div
                        class="max-w-sm w-full border border-gray-200 bg-white rounded-lg shadow-xl mx-auto p-4 md:p-6">

                        <div class="flex justify-between mb-3">
                            <div class="flex justify-center items-center">
                                <h5 class="text-xl font-bold leading-none text-blue-600 pe-1">Website
                                    Traffic</h5>
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
                                        class="ms-2 text-sm font-medium text-blue-500 ">Packages</label>
                                </div>
                                <div class="flex items-center me-4">
                                    <input id="tablet" type="checkbox" value="tablet"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2 ">
                                    <label for="tablet" class="ms-2 text-sm font-medium text-blue-500 ">Events</label>
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

                    <div
                        class="mx-auto max-w-sm w-full border border-gray-200 bg-white rounded-lg shadow-xl p-4 md:p-6">
                        <div class="flex justify-between mb-5">
                            <div>
                                <h5 class="leading-none text-3xl font-bold text-blue-600  pb-2">$20,423
                                </h5>
                                <p class="text-base font-normal text-gray-500">Sales this week</p>
                            </div>
                            <div
                                class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 text-center">
                                23%
                                <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4" />
                                </svg>
                            </div>
                        </div>
                        <div id="legend-chart"></div>

                    </div>
                    <!-- line chart end -->
                </div>

                <div class="col-span-full  w-full bg-white rounded-lg border border-gray-200 mb-10 shadow-xl p-10">
                    <div class="flex justify-between mb-5">
                        <div>
                            <h5 class="leading-none text-3xl font-bold text-blue-600  pb-2">$23,250
                            </h5>
                            <p class="text-base font-normal text-gray-500 ">Sales this month</p>
                        </div>
                        <div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-red-500 text-center">
                            10%
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 24" fill="currentColor"
                                class="w-4 h-4 ms-1" stroke-width="2">
                                <path fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"
                                    d="M12 2.25a.75.75 0 0 1 .75.75v16.19l6.22-6.22a.75.75 0 1 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 1 1 1.06-1.06l6.22 6.22V3a.75.75 0 0 1 .75-.75Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </div>
                    </div>
                    <div id="grid-chart"></div>
                    <div class="grid grid-cols-1 items-center border-gray-200 border-t  justify-between mt-5">
                        <div class="flex justify-between items-center pt-5">
                            <!-- Button -->
                            <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown"
                                data-dropdown-placement="bottom"
                                class="text-sm font-medium text-gray-500  hover:text-gray-900 text-center inline-flex items-center "
                                type="button">
                                Last 12 Months
                                <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="lastDaysdropdown"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                                <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Last
                                            month</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">last
                                            2 months</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">last
                                            5 Months</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#"
                                class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700   hover:bg-gray-100 px-3 py-2">
                                Sales Report
                                <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- col-span-ful chart end-->
                <div class="grid w-full  grid-cols-2 gap-4 mt-4 xl:grid-cols-1 2xl:grid-cols-2 mb-10">
                    <div
                        class="relative w-full border border-gray-200 overflow-x-auto mx-auto px-8 shadow-md sm:rounded-lg overflow-auto p-4">
                        <h5 class="leading-none text-xl font-bold text-blue-600 border-b border-gray-300 pb-4 my-4 ">
                            Recent
                            Orders from Customers
                        </h5>
                        <div class="max-h-80 ">
                            <table
                                class="w-full text-sm text-left rtl:text-right text-gray-500 rounded-xl items-center">
                                <thead class="text-xs text-black uppercase bg-gray-100 rounded-xl">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Customer Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Type
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Status
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Order Date
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Item ID
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr class="odd:bg-white  even:bg-gray-50">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                {{ $order->user->name }}
                                            </th>
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                {{ $order->type }}
                                            </th>
                                            @if ($order->status->label() == 'ongoing')
                                                <td class="px-6 py-4 font-medium text-green-600">
                                                    {{ $order->status }}
                                                </td>
                                            @elseif($order->status->label() == 'Cancelled')
                                                <td class="px-6 py-4 font-medium text-red-600">
                                                    {{ $order->status }}
                                                </td>
                                            @else
                                                <td class="px-6 py-4 font-medium text-blue-600">
                                                    {{ $order->status }}
                                                </td>
                                            @endif
                                            <td class="px-6 py-4">
                                                {{ $order->order_date }}
                                            </td>
                                            <td class="px-6 py-4 items-center">
                                                {{ $order->item_id }}
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        <!-- content container end -->
        </div>
        </div>
    </section>
</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<!-- bar chart scripts start -->
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
<!-- bar chart scripts end -->
<!-- donut chart start -->
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
<!-- donut chart end -->
<!-- line chart start -->
<script>
    const options2 = {

        series: [{
                name: "Last Week",
                data: [1600, 1418, 1456, 1626, 1756, 1456, 1541],
                color: "#1A56DB",
            },
            {
                name: "This Week",
                data: [1843, 1613, 1765, 1452, 1623, 1731, 1681],
                color: "#7E3BF2",
            },
        ],
        chart: {
            height: "64%",
            maxWidth: "64%",
            type: "area",
            fontFamily: "Inter, sans-serif",
            dropShadow: {
                enabled: false,
            },
            toolbar: {
                show: false,
            },
        },
        tooltip: {
            enabled: true,
            x: {
                show: false,
            },
        },
        legend: {
            show: true
        },
        fill: {
            type: "gradient",
            gradient: {
                opacityFrom: 0.55,
                opacityTo: 0,
                shade: "#1C64F2",
                gradientToColors: ["#1C64F2"],
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            width: 6,
        },
        grid: {
            show: false,
            strokeDashArray: 4,
            padding: {
                left: 2,
                right: 2,
                top: -26
            },
        },
        xaxis: {
            categories: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday',
                'Sunday'
            ],
            labels: {
                show: false,
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
            labels: {
                formatter: function(value) {
                    return '$' + value;
                }
            }
        },
    }

    if (document.getElementById("legend-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("legend-chart"), options2);
        chart.render();
    }
</script>
<!-- line chart end -->
<script>
    const options3 = {

        grid: {
            show: true,
            strokeDashArray: 4,
            padding: {
                left: 2,
                right: 2,
                top: -26
            },
        },
        series: [{
                name: "This Month",
                data: [1500, 1518, 1456, 1526, 1456, 1556, 1700, 1631, 1731, 1800],
                color: "#1A56DB",
            },
            {
                name: "Last Month",
                data: [1643, 1613, 1565, 1712, 1523, 1731, 1500, 1580, 1510, 1600],
                color: "#7E3BF2",
            },
        ],
        chart: {
            height: "100%",
            maxWidth: "100%",
            type: "area",
            fontFamily: "Inter, sans-serif",
            dropShadow: {
                enabled: false,
            },
            toolbar: {
                show: false,
            },
        },
        tooltip: {
            enabled: true,
            x: {
                show: false,
            },
        },
        legend: {
            show: true
        },
        fill: {
            type: "gradient",
            gradient: {
                opacityFrom: 0.55,
                opacityTo: 0,
                shade: "#1C64F2",
                gradientToColors: ["#1C64F2"],
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            width: 6,
        },
        xaxis: {
            categories: ['January', 'February', 'March', 'May', 'June', 'July',
                'August', 'September', 'November', 'December'
            ],
            labels: {
                show: false,
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
            labels: {
                formatter: function(value) {
                    return '$' + value;
                }
            }
        },
    }

    if (document.getElementById("grid-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("grid-chart"), options3);
        chart.render();
    }
</script>
<!-- col-span line chart end -->
