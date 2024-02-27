<div data-image-uploader data-image-uploader-file-type-regex="(\.jpg|\.jpeg|\.png)$" data-image-uploader-max-file-size="8" class="form__field form__load-img">
    <p class="form__title">Предзагрузка фото (Максимум 30 фото на один объект)</p>
    <div class="load__img-wrap">
        <div class="load__img-content" data-image-uploader-drop-area>
            <div class="content__wrapper" data-image-uploader-content>
                <button type="button" class="blue--btn">Upload File</button>
                <span>/</span>
                <svg viewBox="0 0 17 17" width="17" height="17" fill="none">
                    <path d="M14.917 7.611H11.25v5.333h-5.5V7.611H2.083L8.5.5l6.417 7.111Zm-13.75 7.111h14.666V16.5H1.167v-1.778Z" fill="#767676" />
                </svg>
                <p>Загрузить фото</p>
                <div class="upload__TipIcon">
                    <span>
                        <svg viewBox="0 0 17 17" width="17" height="17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#a)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.5 1.955a6.545 6.545 0 1 0 0 13.09 6.545 6.545 0 0 0 0-13.09ZM.5 8.5a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm8-3.636c.402 0 .727.325.727.727V8.5a.727.727 0 0 1-1.454 0V5.59c0-.4.325-.726.727-.726Zm0 5.818a.727.727 0 0 0 0 1.454h.007a.727.727 0 0 0 0-1.454H8.5Z" fill="#767676" />
                            </g>
                            <defs>
                                <clipPath id="a">
                                    <path fill="#fff" transform="translate(.5 .5)" d="M0 0h16v16H0z" />
                                </clipPath>
                            </defs>
                        </svg>
                    </span>
                    <div class="upload__Tooltip">
                        <ul>
                            <li>- Images must be in JPG, JPEG and PNG format.</li>
                            <li>- File size must be 8 MB or less.</li>
                            <li>- Maximum 30 images.</li>
                            <li>- Image must be at least 100 pixels tall.</li>
                            <li>- Image must be at least 100 pixels wide.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <input type="file" enctype="multipart/form-data" accept=".png, .jpg, .jpeg" multiple style="display: none;">
        </div>
    </div>
    <ul class="validation-summary-errors error__msg margin--top-16 hidden" id="errorMessage" data-image-uploader-errors>
        <li>* Images must be in JPG, JPEG and PNG format.</li>
        <li>* File size must be 8 MB or less.</li>
        <li>* Maximum 30 images.</li>
        <li>* Image must be at least 100 pixels tall.</li>
        <li>* Image must be at least 100 pixels wide.</li>
    </ul>
    <div class="upload__thumbnails hidden" data-thumbnails-container>
        <div>
            <div>
                <span>Uploaded files</span>
                <div class="imgs__wrapper">
                    <div class="item__imgs" data-image-preview-container>
                        <template data-image-preview>
                            <div class="item__wrapper" data-image-preview-element>
                                <div class="remove__img">
                                    <button class="remove__icon" data-removal-button>
                                        <svg viewBox="0 0 12 12" width="12" height="12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1.2 10.8 0 6 4.8 1.2 0 0 1.2 4.8 6 0 10.8 1.2 12 6 7.2l4.8 4.8 1.2-1.2L7.2 6 12 1.2Z" fill="#4B4B4B" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="review__img">
                                    <picture>
                                        <img style="max-width: 200px; min-width: 200px; min-width: 200px; max-width: 200px" />
                                    </picture>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>