window.addEventListener('DOMContentLoaded', () => {
    // ①雪を発生させるコンテナを指定
    const section = document.querySelector('.snow-container');

    // ②雪を生成する関数
    const createSnow = () => {
        const snowEl = document.createElement('span');
        snowEl.className = 'snow';
        const minSize = 5;
        const maxSize = 10;
        const size = Math.random() * (maxSize - minSize) + minSize;
        snowEl.style.width = `${size}px`;
        snowEl.style.height = `${size}px`;
        snowEl.style.left = Math.random() * 100 + '%';
        section.appendChild(snowEl);

        // 一定時間が経てば雪を消す
        setTimeout(() => {
            snowEl.remove();
        }, 15000);
    }

    // ③雪を生成する関数を一定間隔で呼び出す
    setInterval(createSnow, 700);
});

window.addEventListener('DOMContentLoaded', () => {
    // コンテナを指定
    const section = document.querySelector('.cherry-blossom-container');

    // 花びらを生成する関数
    const createPetal = () => {
        const petalEl = document.createElement('span');
        petalEl.className = 'petal';
        const minSize = 10;
        const maxSize = 15;
        const size = Math.random() * (maxSize + 1 - minSize) + minSize;
        petalEl.style.width = `${size}px`;
        petalEl.style.height = `${size}px`;
        petalEl.style.left = Math.random() * innerWidth + 'px';
        section.appendChild(petalEl);

        // 一定時間が経てば花びらを消す
        setTimeout(() => {
            petalEl.remove();
        }, 10000);
    }

    // 花びらを生成する間隔をミリ秒で指定
    setInterval(createPetal, 2000);
});

window.addEventListener('DOMContentLoaded', () => {
    // コンテナを指定
    const container = document.querySelector('.leaves-container');

    // 葉っぱを生成する関数
    const createLeaf = (leafClass, minSizeVal, maxSizeVal) => {
        const leafEl = document.createElement('span');
        leafEl.className = `leaf ${leafClass}`;
        const minSize = minSizeVal;
        const maxSize = maxSizeVal;
        const size = Math.random() * (maxSize + 1 - minSize) + minSize;
        leafEl.style.width = `${size}px`;
        leafEl.style.height = `${size}px`;
        leafEl.style.left = Math.random() * 100 + '%';
        container.appendChild(leafEl);

        // 一定時間が経てば葉っぱを消す
        setTimeout(() => {
            leafEl.remove();
        }, 8000);
    }

    // 葉っぱを生成する間隔をミリ秒で指定する
    // createLeafの引数には、'クラス名', '最小サイズ', '最大サイズ'を渡す
    setInterval(createLeaf.bind(this, 'leaf-1', 10, 30), 2000);
    setInterval(createLeaf.bind(this, 'leaf-2', 30, 50), 2000);
    setInterval(createLeaf.bind(this, 'leaf-3', 30, 50), 2000);
});


window.addEventListener('DOMContentLoaded', () => {
    // コンテナを指定
    const container = document.querySelector('.summer-container');

    // 葉っぱを生成する関数
    const createSummer = (summerClass, minSizeVal, maxSizeVal) => {
        const summerEl = document.createElement('span');
        summerEl.className = `summer ${summerClass}`;
        const minSize = minSizeVal;
        const maxSize = maxSizeVal;
        const size = Math.random() * (maxSize + 1 - minSize) + minSize;
        summerEl.style.width = `${size}px`;
        summerEl.style.height = `${size}px`;
        summerEl.style.left = Math.random() * 100 + '%';
        container.appendChild(summerEl);

        // 一定時間が経てば葉っぱを消す
        setTimeout(() => {
            summerEl.remove();
        }, 8000);
    }

    // 葉っぱを生成する間隔をミリ秒で指定する
    // createLeafの引数には、'クラス名', '最小サイズ', '最大サイズ'を渡す
    setInterval(createSummer.bind(this, 'summer-1', 20, 30), 3000);
    setInterval(createSummer.bind(this, 'summer-2', 10, 20), 3000);
    setInterval(createSummer.bind(this, 'summer-3', 10, 15), 3000);
});
