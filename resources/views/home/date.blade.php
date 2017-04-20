<div class="flex">
    <div>
        <time datetime="{{ $date->day.'/'.$date->month.'/'.$date->year }}" class="date-as-calendar inline-flex size1x">
            <span class="weekday">{{ date($date->day.'/'.$date->month.'/'.$date->year, 'D')  }}</span>
            <span class="day">{{ $date->number }}</span>
            <span class="month">{{ $date ->month }}</span>
        </time>
    </div>
    <div>
        <p>{{ $date->title }}</p>
        <p>{{ $date->undertitle }}</p>
    </div>
</div>