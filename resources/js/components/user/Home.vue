<template>
    <nav class="navs p-0">
        <div class="header mt-4">
            <div class="row justify-content-end">
                <div class=" d-flex col-5">
                    <div class="input-group  input-group-lg ml-auto w-fit">
                        <input type="text" class="form-control p-4" v-model="filter.search" @keyup="change" placeholder="Cari Product" aria-label="Cari Product" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text my-text" id="inputGroup-sizing-lg">
                            <svg width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11 4C7.13401 4 4 7.13401 4 11C4 14.866 7.13401 18 11 18C14.866 18 18 14.866 18 11C18 7.13401 14.866 4 11 4ZM2 11C2 6.02944 6.02944 2 11 2C15.9706 2 20 6.02944 20 11C20 15.9706 15.9706 20 11 20C6.02944 20 2 15.9706 2 11Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9429 15.9429C16.3334 15.5524 16.9666 15.5524 17.3571 15.9429L21.7071 20.2929C22.0977 20.6834 22.0977 21.3166 21.7071 21.7071C21.3166 22.0976 20.6834 22.0976 20.2929 21.7071L15.9429 17.3571C15.5524 16.9666 15.5524 16.3334 15.9429 15.9429Z" fill="white"/>
                            </svg>
                            </span>
                        </div>
                    </div>
                    <div class="my-auto mx-3 hover">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1559 2.70302C17.0104 2.34893 17.9264 2.16669 18.8514 2.16669C19.7764 2.16669 20.6923 2.34893 21.5469 2.70302C22.4013 3.05704 23.1775 3.57589 23.8314 4.22995C24.4855 4.8838 25.0047 5.66045 25.3587 6.51484C25.7128 7.36939 25.895 8.28533 25.895 9.21033C25.895 10.1353 25.7128 11.0513 25.3587 11.9058C25.0046 12.7603 24.4857 13.5366 23.8316 14.1905C23.8315 14.1906 23.8316 14.1905 23.8316 14.1905L14.2549 23.7672C13.8318 24.1903 13.1459 24.1903 12.7228 23.7672L3.14618 14.1905C1.82535 12.8697 1.08331 11.0783 1.08331 9.21033C1.08331 7.34239 1.82535 5.55096 3.14618 4.23013C4.46701 2.9093 6.25844 2.16727 8.12638 2.16727C9.99431 2.16727 11.7857 2.9093 13.1066 4.23013L13.4889 4.61243L13.871 4.23031C13.8711 4.23025 13.8709 4.23037 13.871 4.23031C14.5249 3.57617 15.3014 3.05707 16.1559 2.70302ZM18.8514 4.33335C18.211 4.33335 17.5769 4.45953 16.9853 4.70466C16.3937 4.9498 15.8561 5.30909 15.4034 5.76202L14.2549 6.91053C13.8318 7.3336 13.1459 7.3336 12.7228 6.91053L11.5745 5.7622C10.66 4.8477 9.41968 4.33393 8.12638 4.33393C6.83308 4.33393 5.59275 4.8477 4.67824 5.7622C3.76374 6.6767 3.24998 7.91703 3.24998 9.21033C3.24998 10.5036 3.76374 11.744 4.67824 12.6585L13.4889 21.4691L22.2995 12.6585C22.7524 12.2058 23.1119 11.6681 23.357 11.0764C23.6022 10.4848 23.7284 9.85072 23.7284 9.21033C23.7284 8.56995 23.6022 7.93583 23.357 7.34422C23.1119 6.75261 22.7526 6.21509 22.2997 5.76238C21.847 5.30945 21.3091 4.9498 20.7175 4.70466C20.1259 4.45953 19.4918 4.33335 18.8514 4.33335Z" fill="#696969"/>
                        </svg>
                    </div>
                    <div class="my-auto mx-3 hover">
                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.63335 0.516677C3.83795 0.243887 4.15903 0.0833435 4.50002 0.0833435H17.5C17.841 0.0833435 18.1621 0.243887 18.3667 0.516677L21.6167 4.85001C21.7573 5.03753 21.8334 5.26561 21.8334 5.50001V20.6667C21.8334 21.5286 21.4909 22.3553 20.8815 22.9648C20.272 23.5743 19.4453 23.9167 18.5834 23.9167H3.41669C2.55473 23.9167 1.72808 23.5743 1.11859 22.9648C0.509097 22.3553 0.166687 21.5286 0.166687 20.6667V5.50001C0.166687 5.26561 0.242713 5.03753 0.383354 4.85001L3.63335 0.516677ZM5.04169 2.25001L2.33335 5.86112V20.6667C2.33335 20.954 2.44749 21.2295 2.65065 21.4327C2.85382 21.6359 3.12937 21.75 3.41669 21.75H18.5834C18.8707 21.75 19.1462 21.6359 19.3494 21.4327C19.5526 21.2295 19.6667 20.954 19.6667 20.6667V5.86112L16.9584 2.25001H5.04169Z" fill="#696969"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.166687 5.50001C0.166687 4.9017 0.651712 4.41668 1.25002 4.41668H20.75C21.3483 4.41668 21.8334 4.9017 21.8334 5.50001C21.8334 6.09832 21.3483 6.58334 20.75 6.58334H1.25002C0.651712 6.58334 0.166687 6.09832 0.166687 5.50001Z" fill="#696969"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66669 8.75001C7.265 8.75001 7.75002 9.23503 7.75002 9.83334C7.75002 10.6953 8.09243 11.5219 8.70192 12.1314C9.31142 12.7409 10.1381 13.0833 11 13.0833C11.862 13.0833 12.6886 12.7409 13.2981 12.1314C13.9076 11.5219 14.25 10.6953 14.25 9.83334C14.25 9.23503 14.735 8.75001 15.3334 8.75001C15.9317 8.75001 16.4167 9.23503 16.4167 9.83334C16.4167 11.2699 15.846 12.6477 14.8302 13.6635C13.8144 14.6793 12.4366 15.25 11 15.25C9.56343 15.25 8.18568 14.6793 7.16986 13.6635C6.15404 12.6477 5.58335 11.2699 5.58335 9.83334C5.58335 9.23503 6.06838 8.75001 6.66669 8.75001Z" fill="#696969"/>
                        </svg>
                    </div>
                    <div class="my-auto mx-3 hover">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.8365 16.7532C5.85233 15.7373 7.23008 15.1667 8.66667 15.1667H17.3333C18.7699 15.1667 20.1477 15.7373 21.1635 16.7532C22.1793 17.769 22.75 19.1467 22.75 20.5833V22.75C22.75 23.3483 22.265 23.8333 21.6667 23.8333C21.0684 23.8333 20.5833 23.3483 20.5833 22.75V20.5833C20.5833 19.7214 20.2409 18.8947 19.6314 18.2852C19.0219 17.6757 18.1953 17.3333 17.3333 17.3333H8.66667C7.80471 17.3333 6.97806 17.6757 6.36857 18.2852C5.75908 18.8947 5.41667 19.7214 5.41667 20.5833V22.75C5.41667 23.3483 4.93164 23.8333 4.33333 23.8333C3.73502 23.8333 3.25 23.3483 3.25 22.75V20.5833C3.25 19.1467 3.82068 17.769 4.8365 16.7532Z" fill="#696969"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13 4.33332C11.2051 4.33332 9.74998 5.7884 9.74998 7.58332C9.74998 9.37825 11.2051 10.8333 13 10.8333C14.7949 10.8333 16.25 9.37825 16.25 7.58332C16.25 5.7884 14.7949 4.33332 13 4.33332ZM7.58331 7.58332C7.58331 4.59178 10.0084 2.16666 13 2.16666C15.9915 2.16666 18.4166 4.59178 18.4166 7.58332C18.4166 10.5749 15.9915 13 13 13C10.0084 13 7.58331 10.5749 7.58331 7.58332Z" fill="#696969"/>
                        </svg>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.277 14.7522L8.45062 10.5007C8.27687 10.3076 8.41388 10 8.67361 10H16.3264C16.5861 10 16.7231 10.3076 16.5494 10.5007L12.723 14.7522C12.6038 14.8846 12.3962 14.8846 12.277 14.7522Z" fill="#696969"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-head">
            <div class="hover w-fit btn-belanja d-flex">
                <span class="m-auto">
                    BELANJA
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" class="my-auto">
                        <path d="M12.277 14.7522L8.45062 10.5007C8.27687 10.3076 8.41388 10 8.67361 10H16.3264C16.5861 10 16.7231 10.3076 16.5494 10.5007L12.723 14.7522C12.6038 14.8846 12.3962 14.8846 12.277 14.7522Z" fill="#FFFFFF"/>
                    </svg>
                </span>
            </div>
        </div>
    </nav>
    <nav class="breadcrumb align-content-around" aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-items">Home</li>
            <li class="breadcrumb-items" aria-current="page">Produk</li>
            <li class="breadcrumb-items active" aria-current="page">Roaster Bean</li>
        </ol>
    </nav>
    <div class="row" style="width:100%">
        <aside class="col col-lg-3">
            <div class="header d-flex p-0">
                <div class="accordion no-bg" @click="showSort">
                        <label>URUTKAN BERDASARKAN</label>
                        <svg v-if="!showSorting" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        <svg v-if="showSorting" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                        </svg>
                </div>
            </div>
            <div class="sorting-section ">
                <label>Harga</label>
                <div class='range-slider'>
                    <input type="hidden" min="0" max="3000000" step="1" v-model="sliderMin">
                    <input type="hidden" min="0" max="3000000" step="1" v-model="sliderMax">
                    <input type="range" min="0" max="3000000" step="1" v-model="sliderMin">
                    <input type="range" min="0" max="3000000" step="1" v-model="sliderMax">
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col col-lg-6">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Rp</span>
                            </div>
                            <input type="text" class="form-control pt-3 pb-3" :value="formatPrice(sliderMin)">
                        </div>
                    </div>
                    <div class="col col-lg-6">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Rp</span>
                            </div>
                            <input type="text" class="form-control pt-3 pb-3" :value="formatPrice(sliderMax)">
                        </div>
                    </div>
                </div>
            </div>
            <div class="sorting-section ">
                <div class="header d-flex mt-1">
                    <div class="accordion" @click="accordion(1)">
                        <label>Origin</label>
                        <svg v-if="!showOrigin" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        <svg v-if="showOrigin" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                        </svg>
                    </div>
                </div>
                <div class="content list mb-3">
                    <div class="d-flex item content-item" v-for="origin in originData" v-if="showOrigin">
                        <input class="form-check-input" v-model="filter.origin" name="origin" type="checkbox" @change="change" :value="origin.name" id="flexCheckDefault">
                        <label>{{ origin.name }}</label><sub>({{ origin.value }})</sub>
                    </div>
                </div>
                <div class="header d-flex p-0 mt-1">
                    <div class="accordion" @click="accordion(2)">
                        <label>Species</label>
                        <svg v-if="!showSpecies" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        <svg v-if="showSpecies" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                        </svg>
                    </div>
                </div>
                <div class="content list mb-3">
                    <div class="d-flex item content-item" v-for="species in speciesData" v-if="showSpecies">
                        <input class="form-check-input" v-model="filter.species" name="species" type="checkbox" @change="change" :value="species.name" id="flexCheckDefault">
                        <label>{{ species.name }}</label><sub>({{ species.value }})</sub>
                    </div>
                </div>
                <div class="header d-flex p-0 mt-1">
                    <div class="accordion" @click="accordion(3)">
                            <label>Roast Level</label>
                            <svg v-if="!showRoastLevel" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            <svg v-if="showRoastLevel" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                            </svg>
                    </div>
                    </div>
                    <div class="content list mb-3">
                        <div class="d-flex item content-item" v-for="roastLevel in roastLevelData" v-if="showRoastLevel">
                            <input class="form-check-input" type="checkbox" @change="change" v-model="filter.roast_lavel" name="roastLevel" :value="roastLevel.name" id="flexCheckDefault">
                            <label>{{ roastLevel.name }}</label><sub>({{ roastLevel.value }})</sub>
                        </div>
                    </div>
                    <div class="header d-flex p-0 mt-1">
                    <div class="accordion" @click="accordion(4)">
                        <label>Tasted</label>
                        <svg v-if="!showTasted" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        <svg v-if="showTasted" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                        </svg>
                    </div>
                </div>
                <div class="content list mb-3">
                    <div class="d-flex item content-item" v-for="tasted in tastedData" v-if="showTasted">
                        <input class="form-check-input" v-model="filter.tasted" name="tasted" type="checkbox" @change="change" :value="tasted.name" id="flexCheckDefault">
                        <label>{{ tasted.name }}</label><sub>({{ tasted.value }})</sub>
                    </div>
                </div>
                <div class="header d-flex p-0 mt-3">
                    <div class="accordion" @click="accordion(5)">
                        <label>Processing</label>
                        <svg v-if="!showProcessing" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        <svg v-if="showProcessing" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                        </svg>
                    </div>
                </div>
                <div class="content list mb-3">
                    <div class="d-flex item content-item" v-for="processing in processingData" v-if="showProcessing">
                        <input class="form-check-input" v-model="filter.processing" name="processing" type="checkbox" @change="change" :value="processing.name" id="flexCheckDefault">
                        <label>{{ processing.name }}</label><sub>({{ processing.value }})</sub>
                    </div>
                </div>
            </div>
        </aside>
        <div class="col">
            <div class="row justify-content-between pt-2 pb-4 my header-content">
                <div class="d-flex col-4 header-content">
                    <label class="p-2">Menampilkan</label>
                    <select v-model="filter.limit" @change="change" class="custom-select mr-2 ml-2" id="inputGroupSelect01" style="width:50px!important;">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="12">12</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="50">50</option>
                        <option value="60">60</option>
                        <option value="80">80</option>
                        <option value="100">100</option>
                    </select>
                    <label class="p-2">Dari 123</label>
                </div>
                <div class="d-flex col-3 header-content text-right" >
                    <label class="p-2">Urutkan</label>
                    <select class="custom-select" id="inputGroupSelect01" style="width:200px!important;">
                        <option selected>Nama Product</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>
                </div>
            </div>
            <div  class="row">
                <div v-for="(val,idx) in dataList" :key="idx" class="col p-2 col-3">
                    <div class="card" style="cursor: pointer;" @click="()=>$router.push('/detail')" :key="idx">
                        <img class="card-img-top m-2" style="width: 94%;" :src="val.image[0].path" alt="Card image cap">
                        <div class="card-body text-center p-0">
                          <h5 class="card-title">{{val.product_name}}</h5>
                          <h7 class="card-text">{{val.merek}}</h7>
                          <p><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></p>
                          <p class="my-currency breadcrumb-items active">{{formatPrice(val.price)}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default{
    data() {

        return {
            home:"",
            rating:5,
            minAngle: 1500000,
            maxAngle: 2500000,
            originData: [{
                name: 'Aceh',
                value: 8
            }, {
                name: 'Semarang',
                value: 2
            }, {
                name: 'Bandung',
                value: 7
            }, {
                name: 'Jawa',
                value: 5
            }, {
                name: 'Amerika Selatan',
                value: 6
            }, {
                name: 'Lain - Lain',
                value: 8
            }],
            showOrigin: false,
            speciesData: [{
                name: 'Arabika',
                value: 128
            }, {
                name: 'Robusta',
                value: 23
            }, {
                name: 'Blend',
                value: 9
            }],
            showSpecies: false,
            roastLevelData: [{
                name: 'Light Roast',
                value: 8
            }, {
                name: 'Medium Roast',
                value: 2
            }, {
                name: 'Dark Roast',
                value: 7
            }, {
                name: 'Light to Medium Roast',
                value: 5
            }],
            showRoastLevel: false,
            tastedData: [{
                name: 'Sweet',
                value: 18
            }, {
                name: 'Floral',
                value: 21
            }, {
                name: 'Fruity',
                value: 7
            }, {
                name: 'Nutty',
                value: 5
            }, {
                name: 'Cocoa',
                value: 21
            }, {
                name: 'Spices',
                value: 18
            }],
            showTasted: false,
            processingData: [{
                name: 'Honey White',
                value: 8
            }, {
                name: 'Natural',
                value: 2
            }, {
                name: 'Honey Gold',
                value: 7
            }, {
                name: 'Honey Yellow',
                value: 5
            }],
            showProcessing: false,
            showSorting: false,
            filter:{
                search:'',
                limit:12,
                origin:[],
                species:[],
                roast_lavel:[],
                tasted:[],
                processing:[],
            },
            dataList:[],
        }
    },
    components: {
    },
    mounted() {
            this.getList()
    },
    methods: {
        change(){
            this.getList()
        },
        accordion(number) {
            switch (number) {
                case 1 : return this.showOrigin = !this.showOrigin;
                case 2 : return this.showSpecies = !this.showSpecies;
                case 3 : return this.showRoastLevel = !this.showRoastLevel;
                case 4 : return this.showTasted = !this.showTasted;
                case 5 : return this.showProcessing = !this.showProcessing;
            }
        },
        showSort() {
            this.showSorting = !this.showSorting
        },
        formatPrice(value) {
            let val = (value/1).toFixed(2).replace('.', ',')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        },

        getList() {

            this.$store.dispatch("list/list", this.filter).then(
            response => {
                this.dataList = response.data.data
            },
            (error) => {
                this.loading = false;
                this.message =
                (error.response &&
                    error.response.data &&
                    error.response.data.message) ||
                error.message ||
                error.toString();
            }
            );
        },
    },
    computed: {
        sliderMin: {
        get: function() {
            var val = parseInt(this.minAngle);
            return val;
        },
        set: function(val) {
            val = parseInt(val);
            if (val > this.maxAngle) {
            this.maxAngle = val;
            }
            this.minAngle = val;
        }
        },
        sliderMax: {
        get: function() {
            var val = parseInt(this.maxAngle);
            return val;
        },
        set: function(val) {
            val = parseInt(val);
            if (val < this.minAngle) {
            this.minAngle = val;
            }
            this.maxAngle = val;
        }
        }
  }
}
</script>
