<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Заголовок</th>
        <th>Норма Азота</th>
        <th>Норма Фосфора</th>
        <th>Норма Калия</th>
        <th>Группа культур</th>
        <th>Район</th>
        <th>Цена</th>
        <th>Описание</th>
        <th>Назначение</th>
    </tr>
    </thead>
    <tbody>
    @foreach($fertilizers as $fertilizer)
        <tr>
            <td>{{ $fertilizer->id }}</td>
            <td>{{ $fertilizer->title }}</td>
            <td>{{ $fertilizer->nitrogen_norm }}</td>
            <td>{{ $fertilizer->phosphorus_norm }}</td>
            <td>{{ $fertilizer->potassium_norm }}</td>
            <td>{{ $fertilizer->category->title }}</td>
            <td>{{ $fertilizer->district }}</td>
            <td>{{ $fertilizer->price }}</td>
            <td>{{ $fertilizer->desc }}</td>
            <td>{{ $fertilizer->purpose }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
