<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<style>
    .container {
        display: inline-block;
        border: 2px solid #333;
        padding: 10px;
    }
    .product {
        background: #eee;
    }

</style>
<div class="container" id="albums">
    Loading
</div>
<script>

    // let obj1 = {
    //     a: 1,
    //     b: {
    //         c: 2,
    //     },
    // };
    const f1 = () => {
        throw Error('zxc');
    }

    const deepClone = obj => {
        if (obj === null) return null;
        // Создаем поверхностный клона оригинала.
        let clone = Object.assign({}, obj);

        // Определяем, какие пары ключ-значение
        // необходимо глубоко клонировать.
        Object.keys(clone).forEach(
            key =>
                (clone[key] =
                    typeof obj[key] === "object" ? deepClone(obj[key]) : obj[key])
        );

        // Проверяем является ли obj массивом и не пустой ли он.
        return Array.isArray(obj) && obj.length
            // Если obj массив и он не пуст, тогда
            // указываем объекту clone длину исходного массива что бы
            // конвертировать clone в массив и вернуть его.
            ? (clone.length = obj.length) && Array.from(clone)
            // Если obj пустой массив,
            : Array.isArray(obj)
                // то возвращаем его
                ? Array.from(obj)
                // в других случаях obj это объект и мы возвращаем копию clone.
                : clone;
    };

    const cpy = (obj) => {
        if (obj instanceof Error) {
            return Error(obj.message);
        }
        return deepClone(obj);
    }

    try {
        f1();
    } catch (e) {
        nobj = cpy(a);
        console.log(e);
        console.log("after copy");
        console.log(nobj);
    }

    //products
    let layout = '';

    fetch('https://jsonplaceholder.typicode.com/albums')
        .then(response => response.json())
        .then(json => {
            json.forEach((item) => {
                layout += `
                    <div class="product" id="product">
                        <h2>${item.title}</h2>
                        <p>album id: ${item.id}</p>
                        <p>userid: ${item.userId}</p>
                    </div>`;
            });
            albums.innerHTML = layout;
        });

</script>
</body>
</html>