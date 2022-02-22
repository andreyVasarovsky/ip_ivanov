<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Заголовок</th>
        <th>Цена доставки</th>
        <th>Дата договора</th>
        <th>Регион</th>
    </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->title }}</td>
            <td>{{ $client->delivery_price }}</td>
            <td>{{ $client->agreement_date }}</td>
            <td>{{ $client->region }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
