<?= $this->extend('admin/template/admin_template') ?>
<?= $this->section('content') ?>
<div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

        <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
            <div class="grow">
                <h5 class="text-16">Ajouter Article</h5>
            </div>
            <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                    <a href="#!" class="text-slate-400 dark:text-zink-200">Produits</a>
                </li>
                <li class="text-slate-700 dark:text-zink-100">
                    Ajouter Article
                </li>
            </ul>
        </div>
        <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
            <div class="xl:col-span-9">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Creer Article</h6>

                        <form action="#!">
                            <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
                                <div class="xl:col-span-6">
                                    <label for="productNameInput" class="inline-block mb-2 text-base font-medium">Nom Article</label>
                                    <input type="text" id="productNameInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Product title" required="">
                                    <p class="mt-1 text-sm text-slate-400 dark:text-zink-200">Ne pas dépasser 20 caractères lors de la saisie du nom du produit.</p>
                                </div><!--end col-->
                                <div class="xl:col-span-6">
                                    <label for="productCodeInput" class="inline-block mb-2 text-base font-medium">Code Article</label>
                                    <input type="text" id="productCodeInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Product Code" value="TWT145015" disabled="" required="">
                                    <p class="mt-1 text-sm text-slate-400 dark:text-zink-200">Code will be generated automatically</p>
                                </div><!--end col-->
                                <div class="xl:col-span-4">
                                    <label for="qualityInput" class="inline-block mb-2 text-base font-medium">Quantité</label>
                                    <input type="number" id="qualityInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Quantité" required="" min="1">
                                </div><!--end col-->
                                <div class="xl:col-span-4">
                                    <label for="skuInput" class="inline-block mb-2 text-base font-medium">SKU</label>
                                    <input type="text" id="skuInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="TWT-LP-ALU-08" required="">
                                </div><!--end col-->
                                <div class="xl:col-span-4">
                                    <label for="brandInput" class="inline-block mb-2 text-base font-medium">Marque</label>
                                    <input type="text" id="brandInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Marque" required="">
                                </div><!--end col-->
                                <div class="xl:col-span-4">
                                    <label for="categorySelect" class="inline-block mb-2 text-base font-medium">Categorie</label>
                                    <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false">
                                        <div class="choices__inner"><select class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 choices__input" data-choices="" data-choices-search-false="" name="categorySelect" id="categorySelect" hidden="" tabindex="-1" data-choice="active">
                                                <option value="" data-custom-properties="[object Object]">Selection Categorie</option>
                                            </select>
                                            <div class="choices__list choices__list--single">
                                                <div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="[object Object]" aria-selected="true">Selection Categorie</div>
                                            </div>
                                        </div>
                                        <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                            <div class="choices__list" role="listbox">
                                                <div id="choices--categorySelect-item-choice-6" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="6" data-value="" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Selection Categorie</div>
                                                <div id="choices--categorySelect-item-choice-1" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="1" data-value="Beauty, Health, Grocery" data-select-text="Press to select" data-choice-selectable="">Beauty, Health, Grocery</div>
                                                <div id="choices--categorySelect-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Books" data-select-text="Press to select" data-choice-selectable="">Books</div>
                                                <div id="choices--categorySelect-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Home, Kitchen, Pets" data-select-text="Press to select" data-choice-selectable="">Home, Kitchen, Pets</div>
                                                <div id="choices--categorySelect-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Men's Fashion" data-select-text="Press to select" data-choice-selectable="">Men's Fashion</div>
                                                <div id="choices--categorySelect-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="Mobiles, Computers" data-select-text="Press to select" data-choice-selectable="">Mobiles, Computers</div>
                                                <div id="choices--categorySelect-item-choice-7" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="7" data-value="TV, Appliances, Electronics" data-select-text="Press to select" data-choice-selectable="">TV, Appliances, Electronics</div>
                                                <div id="choices--categorySelect-item-choice-8" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="8" data-value="Women's Fashion" data-select-text="Press to select" data-choice-selectable="">Women's Fashion</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="xl:col-span-4">
                                    <label for="productTypeSelect" class="inline-block mb-2 text-base font-medium">Type Produit</label>
                                    <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false">
                                        <div class="choices__inner"><select class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 choices__input" data-choices="" data-choices-search-false="" name="productTypeSelect" id="productTypeSelect" hidden="" tabindex="-1" data-choice="active">
                                                <option value="" data-custom-properties="[object Object]">Selection Type</option>
                                            </select>
                                            <div class="choices__list choices__list--single">
                                                <div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="[object Object]" aria-selected="true">Selection Type</div>
                                            </div>
                                        </div>
                                        <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                            <div class="choices__list" role="listbox">
                                                <div id="choices--productTypeSelect-item-choice-2" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="2" data-value="" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Select Type</div>
                                                <div id="choices--productTypeSelect-item-choice-1" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="1" data-value="Boxed" data-select-text="Press to select" data-choice-selectable="">Boxed</div>
                                                <div id="choices--productTypeSelect-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Single" data-select-text="Press to select" data-choice-selectable="">Single</div>
                                                <div id="choices--productTypeSelect-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Unit" data-select-text="Press to select" data-choice-selectable="">Unit</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="xl:col-span-4">
                                    <label for="genderSelect" class="inline-block mb-2 text-base font-medium">Gender</label>
                                    <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false">
                                        <div class="choices__inner"><select class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 choices__input" data-choices="" data-choices-search-false="" name="genderSelect" id="genderSelect" hidden="" tabindex="-1" data-choice="active">
                                                <option value="" data-custom-properties="[object Object]">Select Gender</option>
                                            </select>
                                            <div class="choices__list choices__list--single">
                                                <div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="[object Object]" aria-selected="true">Select Gender</div>
                                            </div>
                                        </div>
                                        <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                            <div class="choices__list" role="listbox">
                                                <div id="choices--genderSelect-item-choice-3" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="3" data-value="" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Select Gender</div>
                                                <div id="choices--genderSelect-item-choice-1" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="1" data-value="Female" data-select-text="Press to select" data-choice-selectable="">Female</div>
                                                <div id="choices--genderSelect-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Male" data-select-text="Press to select" data-choice-selectable="">Male</div>
                                                <div id="choices--genderSelect-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Unisex" data-select-text="Press to select" data-choice-selectable="">Unisex</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="xl:col-span-6">
                                    <label for="qualityInput" class="inline-block mb-2 text-base font-medium">Variants Couleurs</label>
                                    <div class="flex flex-wrap items-center gap-2">
                                        <div>
                                            <input id="selectColor1" class="inline-block align-middle border rounded-sm appearance-none cursor-pointer size-5 bg-sky-500 border-sky-500 checked:bg-sky-500 checked:border-sky-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color1" name="selectColor">
                                        </div>
                                        <div>
                                            <input id="selectColor2" class="inline-block align-middle bg-orange-500 border border-orange-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-orange-500 checked:border-orange-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color2" name="selectColor" checked="">
                                        </div>
                                        <div>
                                            <input id="selectColor3" class="inline-block align-middle bg-green-500 border border-green-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-green-500 checked:border-green-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color3" name="selectColor">
                                        </div>
                                        <div>
                                            <input id="selectColor4" class="inline-block align-middle bg-purple-500 border border-purple-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-purple-500 checked:border-purple-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color4" name="selectColor">
                                        </div>
                                        <div>
                                            <input id="selectColor5" class="inline-block align-middle bg-yellow-500 border border-yellow-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-yellow-500 checked:border-yellow-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color5" name="selectColor">
                                        </div>
                                        <div>
                                            <input id="selectColor6" class="inline-block align-middle bg-red-500 border border-red-500 rounded-sm appearance-none cursor-pointer size-5 checked:bg-red-500 checked:border-red-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color6" name="selectColor">
                                        </div>
                                        <div>
                                            <input id="selectColor7" class="inline-block align-middle border rounded-sm appearance-none cursor-pointer size-5 bg-slate-500 border-slate-500 checked:bg-slate-500 checked:border-slate-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color7" name="selectColor">
                                        </div>
                                        <div>
                                            <input id="selectColor8" class="inline-block align-middle border rounded-sm appearance-none cursor-pointer size-5 bg-slate-900 border-slate-900 checked:bg-slate-900 checked:border-slate-900 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color7" name="selectColor">
                                        </div>
                                        <div>
                                            <input id="selectColor9" class="inline-block align-middle border rounded-sm appearance-none cursor-pointer size-5 bg-slate-200 border-slate-200 checked:bg-slate-200 checked:border-slate-200 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color7" name="selectColor">
                                        </div>
                                        <div>
                                            <a href="#!" class="flex items-center justify-center border rounded-sm size-5 border-slate-200 dark:border-zink-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="pencil" class="lucide lucide-pencil w-3 h-3">
                                                    <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                                                    <path d="m15 5 4 4"></path>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="xl:col-span-6">
                                    <div class="inline-block mb-2 text-base font-medium">Size</div>
                                    <div class="flex flex-wrap items-center gap-2">
                                        <div>
                                            <input id="selectSizeXS" class="hidden peer" type="checkbox" value="XS" name="selectSize">
                                            <label for="selectSizeXS" class="flex items-center justify-center text-xs border rounded-md cursor-pointer size-10 border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/15 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">XS</label>
                                        </div>
                                        <div>
                                            <input id="selectSizeS" class="hidden peer" type="checkbox" value="S" name="selectSize" checked="">
                                            <label for="selectSizeS" class="flex items-center justify-center text-xs border rounded-md cursor-pointer size-10 border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/15 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">S</label>
                                        </div>
                                        <div>
                                            <input id="selectSizeM" class="hidden peer" type="checkbox" value="M" name="selectSize">
                                            <label for="selectSizeM" class="flex items-center justify-center text-xs border rounded-md cursor-pointer size-10 border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/15 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">M</label>
                                        </div>
                                        <div>
                                            <input id="selectSizeL" class="hidden peer" type="checkbox" value="L" name="selectSize">
                                            <label for="selectSizeL" class="flex items-center justify-center text-xs border rounded-md cursor-pointer size-10 border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/15 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">L</label>
                                        </div>
                                        <div>
                                            <input id="selectSizeXL" class="hidden peer" type="checkbox" value="XL" name="selectSize">
                                            <label for="selectSizeXL" class="flex items-center justify-center text-xs border rounded-md cursor-pointer size-10 border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/15 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">XL</label>
                                        </div>
                                        <div>
                                            <input id="selectSize2XL" class="hidden peer" type="checkbox" value="2XL" name="selectSize">
                                            <label for="selectSize2XL" class="flex items-center justify-center text-xs border rounded-md cursor-pointer size-10 border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/15 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">2XL</label>
                                        </div>
                                        <div>
                                            <input id="selectSize3XL" class="hidden peer" type="checkbox" value="3XL" name="selectSize">
                                            <label for="selectSize3XL" class="flex items-center justify-center text-xs border rounded-md cursor-pointer size-10 border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/15 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">3XL</label>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="lg:col-span-2 xl:col-span-12">
                                    <label for="genderSelect" class="inline-block mb-2 text-base font-medium">Product Images</label>
                                    <div class="flex items-center justify-center bg-white border border-dashed rounded-md cursor-pointer dropzone border-slate-300 dark:bg-zink-700 dark:border-zink-500 dropzone2 dz-clickable">

                                        <div class="w-full py-5 text-lg text-center dz-message needsclick">
                                            <div class="mb-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="upload-cloud" class="lucide lucide-upload-cloud block mx-auto size-12 text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500">
                                                    <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242"></path>
                                                    <path d="M12 12v9"></path>
                                                    <path d="m16 16-4-4-4 4"></path>
                                                </svg>
                                            </div>

                                            <h5 class="mb-0 font-normal text-slate-500 dark:text-zink-200 text-15">Drag and drop your product images or <a href="#!">browse</a> your product images</h5>
                                        </div>
                                    </div>

                                    <ul class="flex flex-wrap mb-0 gap-x-5" id="dropzone-preview2">

                                    </ul>
                                </div>
                                <div class="lg:col-span-2 xl:col-span-12">
                                    <div>
                                        <label for="productDescription" class="inline-block mb-2 text-base font-medium">Description</label>
                                        <textarea class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="productDescription" placeholder="Enter Description" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="xl:col-span-4">
                                    <label for="productPrice" class="inline-block mb-2 text-base font-medium">Price</label>
                                    <input type="number" id="productPrice" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="$0.00" required="">
                                </div><!--end col-->
                                <div class="xl:col-span-4">
                                    <label for="productDiscounts" class="inline-block mb-2 text-base font-medium">Discounts</label>
                                    <input type="number" id="productDiscounts" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="0%" required="">
                                </div><!--end col-->
                                <div class="xl:col-span-4">
                                    <label for="taxApplicable" class="inline-block mb-2 text-base font-medium">TAX Applicable</label>
                                    <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false">
                                        <div class="choices__inner"><select class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 choices__input" data-choices="" data-choices-search-false="" name="taxApplicable" id="taxApplicable" hidden="" tabindex="-1" data-choice="active">
                                                <option value="" data-custom-properties="[object Object]">Select TAX Applicable</option>
                                            </select>
                                            <div class="choices__list choices__list--single">
                                                <div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="[object Object]" aria-selected="true">Select TAX Applicable</div>
                                            </div>
                                        </div>
                                        <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                            <div class="choices__list" role="listbox">
                                                <div id="choices--taxApplicable-item-choice-5" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="5" data-value="" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Select TAX Applicable</div>
                                                <div id="choices--taxApplicable-item-choice-1" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="1" data-value="Entertainment" data-select-text="Press to select" data-choice-selectable="">Entertainment</div>
                                                <div id="choices--taxApplicable-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Exclusive" data-select-text="Press to select" data-choice-selectable="">Exclusive</div>
                                                <div id="choices--taxApplicable-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="none" data-select-text="Press to select" data-choice-selectable="">none</div>
                                                <div id="choices--taxApplicable-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Professional" data-select-text="Press to select" data-choice-selectable="">Professional</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="xl:col-span-4">
                                    <label for="publishDateTime" class="inline-block mb-2 text-base font-medium">Publish Date &amp; Time</label>
                                    <input type="text" id="publishDateTime" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 flatpickr-input" placeholder="Select date &amp; time" data-provider="flatpickr" data-date-format="d M, Y" data-enable-time="" required="" readonly="readonly">
                                </div><!--end col-->
                                <div class="xl:col-span-4">
                                    <label for="productStatus" class="inline-block mb-2 text-base font-medium">Status</label>
                                    <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false">
                                        <div class="choices__inner"><select class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 choices__input" data-choices="" data-choices-search-false="" name="productStatus" id="productStatus" hidden="" tabindex="-1" data-choice="active">
                                                <option value="Draft" data-custom-properties="[object Object]">Draft</option>
                                            </select>
                                            <div class="choices__list choices__list--single">
                                                <div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Draft" data-custom-properties="[object Object]" aria-selected="true">Draft</div>
                                            </div>
                                        </div>
                                        <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                            <div class="choices__list" role="listbox">
                                                <div id="choices--productStatus-item-choice-1" class="choices__item choices__item--choice is-selected choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="Draft" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Draft</div>
                                                <div id="choices--productStatus-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Entertainment" data-select-text="Press to select" data-choice-selectable="">Entertainment</div>
                                                <div id="choices--productStatus-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Published" data-select-text="Press to select" data-choice-selectable="">Published</div>
                                                <div id="choices--productStatus-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Scheduled" data-select-text="Press to select" data-choice-selectable="">Scheduled</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="xl:col-span-4">
                                    <label for="productVisibility" class="inline-block mb-2 text-base font-medium">Visibility</label>
                                    <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false">
                                        <div class="choices__inner"><select class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 choices__input" data-choices="" data-choices-search-false="" name="productVisibility" id="productVisibility" hidden="" tabindex="-1" data-choice="active">
                                                <option value="Public" data-custom-properties="[object Object]">Public</option>
                                            </select>
                                            <div class="choices__list choices__list--single">
                                                <div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Public" data-custom-properties="[object Object]" aria-selected="true">Public</div>
                                            </div>
                                        </div>
                                        <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                            <div class="choices__list" role="listbox">
                                                <div id="choices--productVisibility-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="Hidden" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Hidden</div>
                                                <div id="choices--productVisibility-item-choice-2" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Public" data-select-text="Press to select" data-choice-selectable="">Public</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="lg:col-span-2 xl:col-span-12">
                                    <label for="productTag" class="inline-block mb-2 text-base font-medium">Product Tag</label>
                                    <div class="choices" data-type="text" aria-haspopup="true" aria-expanded="false">
                                        <div class="choices__inner"><input class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 choices__input" id="productTag" data-choices="" data-choices-text-unique-true="" type="text" value="Fashion,Clothes,Headphones" hidden="" tabindex="-1" data-choice="active">
                                            <div class="choices__list choices__list--multiple">
                                                <div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Fashion" data-custom-properties="[object Object]" aria-selected="true">Fashion</div>
                                                <div class="choices__item choices__item--selectable" data-item="" data-id="2" data-value="Clothes" data-custom-properties="[object Object]" aria-selected="true">Clothes</div>
                                                <div class="choices__item choices__item--selectable" data-item="" data-id="3" data-value="Headphones" data-custom-properties="[object Object]" aria-selected="true">Headphones</div>
                                            </div><input type="search" name="search_terms" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="null">
                                        </div>
                                        <div class="choices__list choices__list--dropdown" aria-expanded="true"></div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end grid-->
                            <div class="flex justify-end gap-2 mt-4">
                                <button type="reset" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Reset</button>
                                <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Create Product</button>
                                <button type="button" class="text-white bg-green-500 border-green-500 btn hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/10">Draft &amp; Preview</button>
                            </div>
                        </form>
                    </div>
                </div><!--end card-->
            </div><!--end col-->
            <div class="xl:col-span-3">
                <div class="card sticky top-[calc(theme('spacing.header')_*_1.3)]">
                    <div class="card-body">
                        <h6 class="mb-4 text-15">Product Card Preview</h6>

                        <div class="px-5 py-8 rounded-md bg-sky-50 dark:bg-zink-600">
                            <img src="<?= base_url('assets/images/img-03.png')?>" alt="" class="block mx-auto h-44">
                        </div>

                        <div class="mt-3">
                            <h5 class="mb-2">$145.99 <small class="font-normal line-through">299.99</small></h5>
                            <h6 class="mb-1 text-15">Fastcolors Typography Men</h6>
                            <p class="text-slate-500 dark:text-zink-200">Men's Fashion</p>
                        </div>
                        <h6 class="mt-3 mb-2 text-15">Colors</h6>
                        <div class="flex flex-wrap items-center gap-2">
                            <div>
                                <input id="selectColorPre1" class="inline-block align-middle border rounded-full appearance-none cursor-pointer size-5 bg-sky-500 border-sky-500 checked:bg-sky-500 checked:border-sky-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color1" name="selectColorPre">
                            </div>
                            <div>
                                <input id="selectColorPre2" class="inline-block align-middle bg-orange-500 border border-orange-500 rounded-full appearance-none cursor-pointer size-5 checked:bg-orange-500 checked:border-orange-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color2" name="selectColorPre" checked="">
                            </div>
                            <div>
                                <input id="selectColorPre3" class="inline-block align-middle bg-green-500 border border-green-500 rounded-full appearance-none cursor-pointer size-5 checked:bg-green-500 checked:border-green-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color3" name="selectColorPre">
                            </div>
                            <div>
                                <input id="selectColorPre4" class="inline-block align-middle bg-purple-500 border border-purple-500 rounded-full appearance-none cursor-pointer size-5 checked:bg-purple-500 checked:border-purple-500 disabled:opacity-75 disabled:cursor-default" type="checkbox" value="color4" name="selectColorPre">
                            </div>
                        </div>

                        <h6 class="mt-3 mb-2 text-15">Colors</h6>
                        <div class="flex flex-wrap items-center gap-2">
                            <div>
                                <input id="selectSizePreXS" class="hidden peer" type="checkbox" value="XS" name="selectSizePre">
                                <label for="selectSizePreXS" class="flex items-center justify-center text-xs border rounded-md cursor-pointer size-8 border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/15 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">XS</label>
                            </div>
                            <div>
                                <input id="selectSizePreS" class="hidden peer" type="checkbox" value="S" name="selectSizePre">
                                <label for="selectSizePreS" class="flex items-center justify-center text-xs border rounded-md cursor-pointer size-8 border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/15 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">S</label>
                            </div>
                            <div>
                                <input id="selectSizePreM" class="hidden peer" type="checkbox" value="M" name="selectSizePre">
                                <label for="selectSizePreM" class="flex items-center justify-center text-xs border rounded-md cursor-pointer size-8 border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/15 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">M</label>
                            </div>
                            <div>
                                <input id="selectSizePreL" class="hidden peer" type="checkbox" value="L" name="selectSizePre">
                                <label for="selectSizePreL" class="flex items-center justify-center text-xs border rounded-md cursor-pointer size-8 border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/15 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">L</label>
                            </div>
                            <div>
                                <input id="selectSizePreXL" class="hidden peer" type="checkbox" value="XL" name="selectSizePre">
                                <label for="selectSizePreXL" class="flex items-center justify-center text-xs border rounded-md cursor-pointer size-8 border-slate-200 dark:border-zink-500 peer-checked:bg-custom-50 dark:peer-checked:bg-custom-500/20 peer-checked:border-custom-300 dark:peer-checked:border-custom-700 peer-disabled:bg-slate-50 dark:peer-disabled:bg-slate-500/15 peer-disabled:border-slate-100 dark:peer-disabled:border-slate-800 peer-disabled:cursor-default peer-disabled:text-slate-500 dark:peer-disabled:text-zink-200">XL</label>
                            </div>
                        </div>
                        <div class="flex gap-2 mt-4">
                            <button type="button" class="w-full bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20">Create Products</button>
                            <button type="button" class="w-full text-white bg-purple-500 border-purple-500 btn hover:text-white hover:bg-purple-600 hover:border-purple-600 focus:text-white focus:bg-purple-600 focus:border-purple-600 focus:ring focus:ring-purple-100 active:text-white active:bg-purple-600 active:border-purple-600 active:ring active:ring-purple-100 dark:ring-purple-400/10">Draft</button>
                        </div>
                    </div>
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end grid-->

    </div>
    <!-- container-fluid -->
</div>
<?= $this->endSection() ?>