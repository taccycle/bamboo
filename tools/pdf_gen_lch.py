#!/usr/bin/python
# -*- coding: utf-8 -*-

__author__ = u'喵喵'


import os
import preppy
import logging
import traceback
import trml2pdf
#from django.conf import settings

import reportlab.lib.styles
from reportlab.pdfbase import pdfmetrics, ttfonts
from reportlab.lib.fonts import addMapping

operation_logger = logging.getLogger('operation')
bug_log = logging.getLogger('bug')


class PDFUtils(object):

    """ PDF 生成工具类 

    将一个标准的RML文件正常解析为PDF文件，保存并返回。具体参数如下"""

    def __init__(self, font_dir="C:\Windows\Fonts\simsun.ttc",static_dir='examples'):
        """ 构造方法

        @param font_dir 需要注册的字体文件目录
        @param static_dir 静态文件地址目录 
        """

        super(PDFUtils, self).__init__()
        self.STATIC_DIR = static_dir
        try:
            # 注册宋体字体
            pdfmetrics.registerFont(ttfonts.TTFont('song', "C:\Windows\Fonts\simsun.ttc"))
            # 注册宋体粗体字体
            #pdfmetrics.registerFont(ttfonts.TTFont('song_b', os.path.join(font_dir, 'simsun.ttc')))
        except:
            bug_log.error(traceback.format_exc())

        addMapping('song', 0, 0, 'song')       # normal
        addMapping('song', 0, 1, 'song')       # italic
        addMapping('song', 1, 1, 'song_b')     # bold, italic
        addMapping('song', 1, 0, 'song_b')     # bold

        # 设置自动换行,测试的时候可以注释掉！！！先不换行
        reportlab.lib.styles.ParagraphStyle.defaults['wordWrap'] = "CJK"



        
    def create_pdf(self, templ, save_file):  
        """从二进制流中创建PDF并返回 
        @param templ 需要渲染的RML文件地址（全路径） 
        @param save_file PDF文件保存的地址（全路径） 
        """  
        pdf =  trml2pdf.parseString(file(templ,'r').read())  
        # Save to PDF  
        open(save_file,'wb').write(pdf)  
        return True  
          
  
if __name__ == '__main__':  
      
    pdfUtils = PDFUtils() 
    # 模板页面地址  
    temp_path = raw_input("PLZ input your template here:\n>").replace('"','')
    pdf_path = temp_path + ".pdf" 
    # 如果PDF不存在则重新生成  
    if not os.path.exists(pdf_path):  
        pdfUtils.create_pdf(temp_path,pdf_path)  
    else:
        print u"%s已经存在，创建了%s" % (temp_path, pdf_path + ".new.pdf")
        pdfUtils.create_pdf(temp_path,temp_path + ".new.pdf")  
    print 'done' 