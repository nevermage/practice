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
    <div class="product" id="product">
        <h2></h2>
        <p>album id: </p>
        <p>userid: </p>
    </div>
</div>
<script>

    // let obj1 = {
    //     a: 1,
    //     b: {
    //         c: 2,
    //     },
    // };
    const cpy = (obj) => {
        if (obj instanceof Error) {
            return Error(obj.message);
        }
        return (JSON.parse(JSON.stringify(obj)));
    }
    const f1 = () => {
        throw Error('zxc');
    }
    try {
        f1();
    } catch (e) {
        console.log(e);
        console.log("after copy");
        nobj = cpy(e);
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