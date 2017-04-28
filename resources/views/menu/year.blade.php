<div>
    <form method="get" action="/getStuvers" id="stuver">
        <select name="jaar" id="jaar">
            @foreach($departementen->year->others as $year)
                <option value="{{ $year->jaar }}">{{ $year->text }}</option>
            @endforeach
        </select>
        <button type="submit">Tonen</button>
    </form>
</div>