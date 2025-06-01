@extends('layouts.main')
@section('content')
    <section id="listino-prezzi">
        <div class="container">
            <h1>Listino Prezzi</h1>
            <div class="price-list">
                <div class="price-category">
                    <h2>Capelli</h2>
                    <div class="price-item">
                        <span class="service-name">Taglio Capelli</span>
                        <span class="price">€25</span>
                    </div>
                    <div class="price-item">
                        <span class="service-name">Taglio Capelli + Shampoo</span>
                        <span class="price">€30</span>
                    </div>
                    <div class="price-item">
                        <span class="service-name">Taglio Capelli + Styling</span>
                        <span class="price">€35</span>
                    </div>
                </div>

                <div class="price-category">
                    <h2>Barba</h2>
                    <div class="price-item">
                        <span class="service-name">Taglio Barba</span>
                        <span class="price">€15</span>
                    </div>
                    <div class="price-item">
                        <span class="service-name">Rasatura Completa</span>
                        <span class="price">€20</span>
                    </div>
                    <div class="price-item">
                        <span class="service-name">Modellatura Barba</span>
                        <span class="price">€25</span>
                    </div>
                </div>

                <div class="price-category">
                    <h2>Percorsi Relax</h2>
                    <div class="price-item">
                        <span class="service-name">Trattamento Viso Base</span>
                        <span class="price">€30</span>
                    </div>
                    <div class="price-item">
                        <span class="service-name">Trattamento Viso Premium</span>
                        <span class="price">€45</span>
                    </div>
                    <div class="price-item">
                        <span class="service-name">Pacchetto Completo (Capelli + Barba + Trattamento)</span>
                        <span class="price">€80</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
