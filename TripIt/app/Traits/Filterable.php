<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Filterable
{
    public function scopeApplyFilters(Builder $query, array $filters)
    {
        if (isset($filters['date_range'])) {
            $this->applyDateRangeFilter($query, $filters['date_range']);
        }

        if (isset($filters['price'])) {
            $this->applyPriceFilter($query, (array)$filters['price']);
        }

        if (isset($filters['categories'])) {
            $this->applyCategoryFilter($query, $filters['categories']);
        }

        if (isset($filters['logistics'])) {
            $this->applyLogisticsFilter($query, $filters['logistics']);
        }

        return $query;
    }

    protected function applyDateRangeFilter(Builder $query, array $dateRange)
    {
        $startDate = $dateRange['start'] ?? null;
        $endDate = $dateRange['end'] ?? null;

        if ($startDate && $endDate) {
            $query->where(function ($q) use ($startDate, $endDate) {
                $q->where(function ($q) use ($startDate, $endDate) {
                    $q->where('start_date', '>=', $startDate)
                        ->where('start_date', '<=', $endDate);
                })->orWhere(function ($q) use ($startDate, $endDate) {
                    $q->where('end_date', '>=', $startDate)
                        ->where('end_date', '<=', $endDate);
                })->orWhere(function ($q) use ($startDate, $endDate) {
                    $q->where('start_date', '<=', $startDate)
                        ->where('end_date', '>=', $endDate);
                });
            });
        }
    }

    protected function applyPriceFilter(Builder $query, array $priceRanges)
    {
        if (!empty($priceRanges)) {
            $query->where(function ($q) use ($priceRanges) {
                foreach ($priceRanges as $range) {
                    switch ($range) {
                        case '<5000':
                            $q->orWhere('price', '<', 5000);
                            break;
                        case '5001-10000':
                            $q->orWhereBetween('price', [5001, 10000]);
                            break;
                        case '10001-25000':
                            $q->orWhereBetween('price', [10001, 25000]);
                            break;
                        case '25001-50000':
                            $q->orWhereBetween('price', [25001, 50000]);
                            break;
                        case '50001-100000':
                            $q->orWhereBetween('price', [50001, 100000]);
                            break;
                        case '>100000':
                            $q->orWhere('price', '>', 100000);
                            break;
                    }
                }
            });
        }
    }

    protected function applyCategoryFilter(Builder $query, array $categories)
    {
        $query->whereIn('category_id', $categories);
    }

    protected function applyLogisticsFilter(Builder $query, array $logistics)
    {
        foreach ($logistics as $key => $value) {
            if ($value) {
                $query->where($key, '=', '1');
            }
        }
    }
}
