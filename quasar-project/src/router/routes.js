
const routes = [
  /*{
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/IndexPage.vue') }
    ]
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/ErrorNotFound.vue')
  }*/
  {
    path: '/',
    component: () => import('pages/IndexPage.vue'),
  },
  {
    path: '/add',
    component: () => import('pages/FormularioDogPagina.vue'),
  },
  {
    path: '/all',
    component: () => import('pages/DetallesDogPagina.vue'),
  },
  {
    path: '/help',
    component: () => import('pages/AyudaPagina.vue'),  
  },

  {
    path: '/:pathMatch(.*)*', 
    name: 'notFound',
    component: () => import('../pages/ErrorNotFoundPage.vue')
  }
]

export default routes
