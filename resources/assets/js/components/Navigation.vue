<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <router-link :to="{ name: 'home' }" class="navbar-brand">App</router-link>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                            <li><router-link :to="{ name: 'timeline' }">Timeline</router-link></li>
                            <li><router-link :to="{ name: 'login' }">Login</router-link></li>
                            <li><router-link :to="{ name: 'register'}"> Register</router-link></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Reinhold lehnhar <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#"
                                       >
                                        Logout
                                    </a>

                                    <form id="logout-form" action="#" method="POST" style="display: none;">
                                     </form>
                                </div>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

