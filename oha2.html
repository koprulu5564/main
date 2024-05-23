<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAVOO Kanalları</title>
    <style>
        /* Mevcut CSS kodları korunuyor */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0;
            margin: 0;
            height: 100vh;
            overflow: hidden;
            background-color: #f0f0f0;
        }
        video {
            width: 100%;
            height: 30vh;
            margin: 0;
        }
        h1 {
            font-size: 24px;
            margin: 20px 0;
            cursor: pointer;
        }
        #category-list {
            display: flex;
            gap: 10px;
            width: 80%;
            max-width: 600px;
            overflow-x: auto;
            padding: 10px;
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .category-item {
            background-color: #e0e0e0;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            white-space: nowrap;
        }
        .category-item:hover {
            background-color: #d0d0d0;
        }
        #search-container {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
            width: 80%;
            max-width: 600px;
        }
        #search-input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        #clear-btn {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        #clear-btn:hover {
            background-color: #c82333;
        }
        #channel-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 80%;
            max-width: 600px;
            max-height: 30vh;
            overflow-y: auto;
            padding: 10px;
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        .channel-item {
            background-color: #e0e0e0;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.3s;
        }
        .channel-item:hover {
            background-color: #d0d0d0;
        }
        .channel-item span {
            flex: 1;
        }
        .channel-item i {
            color: #555;
        }
        .button-container {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }
        #export-btn, #refresh-btn {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        #export-btn:hover, #refresh-btn:hover {
            background-color: #0056b3;
        }
        #modal, #export-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
        }
        .modal-content, .export-modal-content {
            background: white;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            width: 80%;
            max-width: 400px;
        }
        .modal-buttons, .export-buttons {
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .play-btn {
            background-color: #28a745;
            color: white;
        }
        .play-btn:hover {
            background-color: #218838;
        }
        .copy-btn {
            background-color: #ffc107;
            color: white;
        }
        .copy-btn:hover {
            background-color: #e0a800;
        }
        .rename-btn {
            background-color: #17a2b8;
            color: white;
        }
        .rename-btn:hover {
            background-color: #138496;
        }
        .cancel-btn {
            background-color: #dc3545;
            color: white;
        }
        .cancel-btn:hover {
            background-color: #c82333;
        }
        .confirm-btn {
            background-color: #007bff;
            color: white;
        }
        .confirm-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <video id="video-player" controls></video>
    <h1 id="page-title">VAVOO KANALLARI</h1>
    <div id="category-list"></div>
    <div id="search-container">
        <input type="text" id="search-input" placeholder="İçerik ara...">
        <button id="clear-btn">Temizle</button>
    </div>
    <div id="channel-list"></div>
    <div class="button-container">
        <button id="export-btn">Dışa Aktar</button>
        <button id="refresh-btn">Yenile</button>
    </div>

    <div id="modal">
        <div class="modal-content">
            <p id="modal-title"></p>
            <div class="modal-buttons">
                <button class="play-btn">Oynat</button>
                <button class="copy-btn">Kopyala</button>
                <button class="rename-btn">İsim Ver</button>
                <button class="cancel-btn">İptal</button>
            </div>
        </div>
    </div>

    <div id="export-modal">
        <div class="export-modal-content">
            <p>Kategorileri seçin:</p>
            <div id="export-options" style="max-height: 200px; overflow-y: auto;"></div>
            <div class="export-buttons">
                <button class="confirm-btn">Dışa Aktar</button>
                <button class="cancel-btn">İptal</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', async function () {
            const proxyUrl = 'https://corsvip.egotv3.site/?apiurl=';
            const mainUrl = 'https://vavoo.to/channels';
            const player = document.getElementById('video-player');
            const modal = document.getElementById('modal');
            const modalTitle = document.getElementById('modal-title');
            const exportModal = document.getElementById('export-modal');
            const exportOptions = document.getElementById('export-options');
            const exportBtn = document.getElementById('export-btn');
            const refreshBtn = document.getElementById('refresh-btn');
            const searchInput = document.getElementById('search-input');
            const clearBtn = document.getElementById('clear-btn');
            const pageTitle = document.getElementById('page-title');
            let selectedChannelUrl = '';
            let categories = {};
            let currentBaseUrl = 'https://vavoo.to/play/';
            let allChannels = [];
            const baseUrls = {
                'VAVOO KANALLARI': 'https://vavoo.to/play/',
                'HUHU KANALLARI': 'https://huhu.to/play/',
                'KOOL KANALLARI': 'https://kool.to/play/',
                'OHA KANALLARI': 'https://oha.to/play/'
            };

            // Başlık tıklama olayını dinleyin ve değiştirin
            pageTitle.addEventListener('click', async () => {
                const titles = Object.keys(baseUrls);
                const currentIndex = titles.indexOf(pageTitle.textContent);
                const nextIndex = (currentIndex + 1) % titles.length;
                pageTitle.textContent = titles[nextIndex];
                currentBaseUrl = baseUrls[titles[nextIndex]];
                await loadChannels();
            });

            // Oynat butonu olay dinleyicisi
            document.querySelector('.play-btn').addEventListener('click', () => {
                player.src = selectedChannelUrl;
                player.play();
                modal.style.display = 'none';
            });

            // Kopyala butonu olay dinleyicisi
            document.querySelector('.copy-btn').addEventListener('click', () => {
                navigator.clipboard.writeText(selectedChannelUrl).then(() => {
                    alert('Bağlantı kopyalandı');
                }).catch(err => {
                    alert('Kopyalama hatası: ' + err);
                });
                modal.style.display = 'none';
            });

            // İsim Ver butonu olay dinleyicisi
            document.querySelector('.rename-btn').addEventListener('click', () => {
                const newName = prompt('Yeni isim:', modalTitle.textContent);
                if (newName) {
                    modalTitle.textContent = newName;
                    const currentChannelItem = document.querySelector(`.channel-item span`);
                    if (currentChannelItem) {
                        currentChannelItem.textContent = newName;
                    }
                }
                modal.style.display = 'none';
            });

            // İptal butonu olay dinleyicisi
            document.querySelectorAll('.cancel-btn').forEach(btn => btn.addEventListener('click', () => {
                modal.style.display = 'none';
                exportModal.style.display = 'none';
            }));

            // Dışa Aktar butonu olay dinleyicisi
            exportBtn.addEventListener('click', () => {
                exportOptions.innerHTML = '';
                Object.keys(categories).forEach(country => {
                    const categoryLabel = document.createElement('label');
                    const categoryCheckbox = document.createElement('input');
                    categoryCheckbox.type = 'checkbox';
                    categoryCheckbox.value = country;
                    categoryCheckbox.dataset.type = 'category';
                    categoryLabel.appendChild(categoryCheckbox);
                    categoryLabel.appendChild(document.createTextNode(country));
                    exportOptions.appendChild(categoryLabel);
                    exportOptions.appendChild(document.createElement('br'));
                });
                exportModal.style.display = 'flex';
            });

            // Yenile butonu olay dinleyicisi
            refreshBtn.addEventListener('click', async () => {
                await loadChannels();
            });

            // Dışa Aktar modalındaki onay butonu olay dinleyicisi
            document.querySelector('.confirm-btn').addEventListener('click', () => {
                const selectedCategories = Array.from(exportOptions.querySelectorAll('input[type="checkbox"]:checked')).map(input => input.value);
                if (selectedCategories.length === 0) {
                    alert('Lütfen en az bir kategori seçin.');
                    return;
                }
                const m3uContent = '#EXTM3U\n' + selectedCategories.map(category => {
                    const channelsInCategory = categories[category].map(channel => `#EXTINF:-1 tvg-id="${channel.id}" tvg-name="${channel.name}" tvg-logo="" group-title="${category}",${channel.name}\n${channel.url}`).join('\n');
                    return channelsInCategory;
                }).join('\n');
                navigator.clipboard.writeText(m3uContent).then(() => {
                    alert('M3U dosyası panoya kopyalandı');
                }).catch(err => {
                    alert('Kopyalama hatası: ' + err);
                });
                exportModal.style.display = 'none';
            });

            // Arama kutusu olay dinleyicisi
            searchInput.addEventListener('input', () => {
                const query = searchInput.value.toLowerCase();
                const filteredChannels = allChannels.filter(channel => channel.name.toLowerCase().includes(query));
                populateChannelList(filteredChannels);
            });

            // Temizle butonu olay dinleyicisi
            clearBtn.addEventListener('click', () => {
                searchInput.value = '';
                populateChannelList(allChannels);
            });

            async function loadChannels() {
                try {
                    const mainResponse = await fetch(proxyUrl + mainUrl);
                    const mainData = await mainResponse.json();
                    categories = {};
                    allChannels = [];
                    mainData.forEach(item => {
                        const { country, id, name } = item;
                        const channelUrl = currentBaseUrl + id + '/index.m3u8';
                        const channel = { id, name, url: channelUrl };
                        allChannels.push(channel);
                        if (!categories[country]) {
                            categories[country] = [];
                        }
                        categories[country].push(channel);
                    });

                    populateCategoryList();
                    populateChannelList(allChannels);
                } catch (error) {
                    console.error(error);
                    alert('Bir hata oluştu: ' + error.message);
                }
            }

            function populateCategoryList() {
                const categoryList = document.getElementById('category-list');
                categoryList.innerHTML = '';
                Object.keys(categories).forEach(country => {
                    const categoryItem = document.createElement('div');
                    categoryItem.classList.add('category-item');
                    categoryItem.textContent = country;
                    categoryItem.addEventListener('click', () => {
                        populateChannelList(categories[country]);
                    });
                    categoryList.appendChild(categoryItem);
                });

                populateChannelList(allChannels);
            }

            function populateChannelList(channelList) {
                const channelListContainer = document.getElementById('channel-list');
                channelListContainer.innerHTML = '';
                channelList.forEach(channel => {
                    const channelItem = document.createElement('div');
                    channelItem.classList.add('channel-item');
                    channelItem.dataset.url = channel.url;
                    channelItem.innerHTML = `<span>${channel.name}</span><i class="fas fa-external-link-alt"></i>`;
                    channelItem.addEventListener('click', () => {
                        selectedChannelUrl = channel.url;
                        modalTitle.textContent = channel.name;
                        modal.style.display = 'flex';
                    });
                    channelListContainer.appendChild(channelItem);
                });
            }

            await loadChannels();
        });
    </script>
</body>
</html>
