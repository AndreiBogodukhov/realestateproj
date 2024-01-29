<?php
session_start();

// Проверяем, авторизован ли администратор
if (!isset($_SESSION['admin_id'])) {
    // Если не авторизован, перенаправляем на страницу входа
    header("Location: signin.php");
    exit;
}

// Дальнейший код страницы админ-панели
?>

<!DOCTYPE html="ru">
<html>

<?php include("head_admin.php"); ?>

<body>
    <?php include("panels.php"); ?>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <!-- horizontal Basic Forms Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Добавление квартир собственников</h4>
                            <p class="mb-30"></p>
                        </div>
                    </div>
                    <form id="apartmentForm" enctype="multipart/form-data" action="save_data.php" method="POST">
                        <div class="form-group">
                            <label>Название квартиры на русском</label>
                            <input class="form-control" type="text" name="apartment_name_ru" />
                        </div>
                        <div class="form-group">
                            <label>Название квартиры на английском</label>
                            <input class="form-control" type="text" name="apartment_name_en" />
                        </div>

                        <div class="form-group">
                            <label>Количество комнат</label>
                            <input class="form-control" type="number" name="bedroom_number" />
                        </div>
                        <div class="form-group">
                            <label>Цена в батах</label>
                            <input class="form-control" type="number" name="price" />
                        </div>
                        <div class="form-group">
                            <label>Площадь в кв.метрах</label>
                            <input class="form-control" type="number" name="area" />
                        </div>
                        <div class="form-group">
                            <label>Этаж квартиры</label>
                            <input class="form-control" type="number" name="floor" />
                        </div>
                        <div class="form-group">
                            <label>Всего этажей в здании</label>
                            <input class="form-control" type="number" name="floor_building" />
                        </div>
                        <div class="form-group">
                            <label>Год постройки</label>
                            <input class="form-control" type="number" name="construction_date" />
                        </div>
                        <div class="form-group">
                            <label>Тип продажи (рус)</label>
                            <input class="form-control" type="text" name="sale_type_ru" />
                        </div>
                        <div class="form-group">
                            <label>Тип продажи (англ)</label>
                            <input class="form-control" type="text" name="sale_type_en" />
                        </div>
                        <div class="form-group">
                            <label>Район (district)</label>
                            <input class="form-control" type="text" name="district_en" />
                        </div>
                        <div class="form-group">
                            <label>Адрес (adress)</label>
                            <input class="form-control" type="text" name="address_en" />
                        </div>
                        <div class="form-group">
                            <label>Тип санузла (рус)</label>
                            <input class="form-control" type="text" name="bathroom_type_ru" />
                        </div>
                        <div class="form-group">
                            <label>Тип санузла - Bathroom (англ)</label>
                            <input class="form-control" type="text" name="bathroom_type_en" />
                        </div>
                        <div class="form-group">
                            <label>Тип балкона (рус)</label>
                            <input class="form-control" type="text" name="outdoor_area_ru" />
                        </div>
                        <div class="form-group">
                            <label>Тип балкона - Outdoor area (англ)</label>
                            <input class="form-control" type="text" name="outdoor_area_en" />
                        </div>

                        <div class="form-group">
                            <label>Состояние недвижимости (рус)</label>
                            <input class="form-control" type="text" name="property_condition_ru" />
                        </div>
                        <div class="form-group">
                            <label>Состояние недвижимости - Property condition (англ)</label>
                            <input class="form-control" type="text" name="property_condition_en" />
                        </div>
                        <div class="form-group">
                            <label>Бассейн (рус)</label>
                            <input class="form-control" type="text" name="pool_ru" />
                        </div>
                        <div class="form-group">
                            <label>Бассейн - Pool (англ)</label>
                            <input class="form-control" type="text" name="pool_en" />
                        </div>
                        <div class="form-group">
                            <label>WiFi (рус)</label>
                            <input class="form-control" type="text" name="wifi_ru" />
                        </div>
                        <div class="form-group">
                            <label>WiFi (англ)</label>
                            <input class="form-control" type="text" name="wifi_en" />
                        </div>
                        <div class="form-group">
                            <label>Наличие мебели (рус)</label>
                            <input class="form-control" type="text" name="furniture_ru" />
                        </div>
                        <div class="form-group">
                            <label>Наличие мебели - Furniture (англ)</label>
                            <input class="form-control" type="text" name="furniture_en" />
                        </div>
                        <div class="form-group">
                            <label>Вид из окна (рус)</label>
                            <input class="form-control" type="text" name="view_ru" />
                        </div>
                        <div class="form-group">
                            <label>Вид из окна - View (англ) </label>
                            <input class="form-control" type="text" name="view_en" />
                        </div>

                        <div class="form-group">
                            <label>Описание(рус)</label>
                            <textarea class="form-control" name="description_ru"></textarea>
                            <small class="form-text text-muted">
                                Текст должен быть не более 2000 символов
                            </small>
                            <label>Описание(англ)</label>
                            <textarea class="form-control" name="description_en"></textarea>
                            <small class="form-text text-muted">
                                Текст должен быть не более 2000 символов
                            </small>
                        </div>

                        <div class="upload-container">
                            <label for="fileInput" class="upload-btn-new">Select Photos</label>
                            <input type="file" id="fileInput" class="file-input-new" accept=".png, .jpg, .jpeg" multiple>
                            <div class="selected-files-new" id="selectedFiles"></div>
                        </div>

                        <div class="btn-list">
                            <button type="submit" class="btn btn-success btn-lg btn-block" id="saveDataButton" form="apartmentForm">
                                Сохранить в базу данных
                            </button>
                        </div>
                    </form>


                </div>

            </div>

            <!-- horizontal Basic Forms End -->
        </div>

    </div>
    </div>

    <?php include('footer_admin.php'); ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Слушаем изменения в поле выбора файлов
            const fileInput = document.getElementById("fileInput");
            const selectedFilesContainer = document.getElementById("selectedFiles");

            fileInput.addEventListener("change", handleFileSelect);

            // Слушаем нажатие кнопки сохранения данных
            const saveDataButton = document.getElementById("saveDataButton");
            saveDataButton.addEventListener("click", saveData);

            function handleFileSelect(event) {
                selectedFilesContainer.innerHTML = ""; // Очищаем контейнер перед добавлением новых файлов

                const files = event.target.files;
                for (const file of files) {
                    const fileName = file.name;
                    const fileSize = formatFileSize(file.size);

                    const fileItem = document.createElement("div");
                    fileItem.classList.add("file-item");
                    fileItem.textContent = `${fileName} (${fileSize})`;

                    selectedFilesContainer.appendChild(fileItem);
                }
            }

            function formatFileSize(size) {
                const kilo = 1024;
                const mega = kilo * kilo;

                if (size < kilo) {
                    return `${size} B`;
                } else if (size < mega) {
                    return `${(size / kilo).toFixed(2)} KB`;
                } else {
                    return `${(size / mega).toFixed(2)} MB`;
                }
            }

            function saveData() {
                // Создаем объект FormData для отправки данных формы, включая файлы
                const formData = new FormData(document.getElementById("apartmentForm"));

                // Отправляем данные на сервер
                fetch("save_data.php", {
                        method: "POST",
                        body: formData,
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Обработка ответа от сервера, например, вы можете вывести сообщение об успешном сохранении
                        console.log(data);
                    })
                    .catch(error => console.error("Error:", error));
            }
        });
    </script>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>