<div class="flex">
    <div>
        <time class="date-as-calendar inline-flex size1x">
            <span class="weekday">{{ $date->dayOfWeek  }}</span>
            <span class="day">{{ $date->day }}</span>
            <span class="month">{{ $date ->month }}</span>
        </time>
    </div>
    <div>
        <p>{{ $date->title }}</p>
        <p>{{ $date->undertitle }}</p>
    </div>
</div>